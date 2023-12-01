<?php

namespace App;

class Cookies
{
  /**
   * Cache default expiration in sec.
   */
  public $expiration = 3600;

  /**
   * Set expiration
   */
  public function remember($sec)
  {
    $this->expiration = $sec;
    return $this;
  }

  /**
   * Save data in cache
   */
  public function set($key)
  {
    setcookie($key, time(), time() + $this->expiration);
  }

  /**
   * Get data from cache
   */
  public function get($key)
  {
    return isset( $_COOKIE[$key] ) ? $_COOKIE[$key] : false;
  }

  /**
   * Remove data from cache
   */
  public function remove($key)
  {
    setcookie($key, '', -1);
  }
}