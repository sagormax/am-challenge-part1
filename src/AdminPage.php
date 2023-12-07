<?php

namespace App;

use App\API\UserLists;

/**
 * Admin Page
 */
class AdminPage
{
  /**
   * Register admin menu with callback
   */
  public function am_api_admin_menu() {
    add_menu_page(
      __('AM Admin Users', AM_API_ADMIN),
      __('AM Users', AM_API_ADMIN),
      'manage_options',
      'am_api_user/api-user-page.php',
      array(&$this, 'am_api_user_lists'),
      'dashicons-email',
      80
    );
  }

  /**
   * Menu page content
   */
  public function am_api_user_lists() {
    $data = (new UserLists())->data();
    var_dump($data);

    echo '
      <div class="wrap">
        <h2>'. __('Email Logs', AM_API_ADMIN) .'</h2>
      </div>
    ';
  }
}