<?php

namespace App;

use App\API\UserLists;

/**
 * This class is dedicated for WP Cli commands
 */
class Commands
{
  /**
   * Register commands
   */
  public function clear_cookies()
  {
    (new Cookies())->remove(AM_API_DATA);
    \WP_CLI::success(AM_API_DATA . ' coockie has been cleared...');
  }

  /**
   * Fetch users
   */
  public function get_users()
  {
    (new UserLists())->fetch();

    \WP_CLI::success('Users has been fetched...');
  }
}