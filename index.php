<?php

defined('ABSPATH') or die('Unauthorized Access!');

/**
 * Require autoload
 */
require_once __DIR__ . '/vendor/autoload.php';

define('AM_API_PLUGIN_PATH', WP_PLUGIN_DIR . '/am-challenge-part1');
define('AM_API_PLUGIN_DATA_PATH', AM_API_PLUGIN_PATH . '/data.json');
define('AM_API_ADMIN', 'am-api-admin');
define('AM_API_DATA', 'am-api-data');

/**
 * Plugin Name: AM API Based Plugin
 * Description: Challenge: Part 1
 * Version: 1.0
 * Author: sagormax
 */

new App\Init();