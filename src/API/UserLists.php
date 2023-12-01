<?php

namespace App\API;

use App\Cookies;
use App\FileLog;

/**
 * User lists API
 */
class UserLists
{
  public $url = 'https://miusage.com/v1/challenge/1/';

  /**
   * Fetch data
   */
  public function fetch($url)
  {
    $response = wp_remote_get($url, array(
      'method' => 'GET'
    ));

    if ( wp_remote_retrieve_response_code($response) === 200 && ! is_wp_error( $response ) ) {
      $message = wp_remote_retrieve_body($response);
      
      // write log
      $this->writeLog($message);

      // remember data
      $this->remember();

      return $message;
    }

    return false;
  }

  /**
   * Data set of user lists
   */
  public function data()
  {
    if (!(new Cookies())->get(AM_API_DATA)) {
      $this->fetch($this->url);
    }

    return (new FileLog())->read(AM_API_PLUGIN_DATA_PATH);
  }

  /**
   * Write log file
   */
  protected function writeLog($message)
  {
    (new FileLog())->write($message, AM_API_PLUGIN_DATA_PATH);
  }

  /**
   * Save data in log file
   */
  protected function remember()
  {
    /* Expire in 1 hour */
    (new Cookies())->remember(3600)->set(AM_API_DATA);
  }
}