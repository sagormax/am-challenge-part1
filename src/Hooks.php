<?php

namespace App;

/**
 * This class is dedicated for registering hooks
 */
class Hooks
{
  /**
   * Register all hooks
   */
  public function register()
  {
    // register action for admin menu
    add_action( 'admin_menu', array( new AdminPage(), 'am_api_admin_menu' ) );

    // register commands
    if ( defined( 'WP_CLI' ) && \WP_CLI ) {
      \WP_CLI::add_command( 'am_api', ( new Commands() ) );
    }
  }
}