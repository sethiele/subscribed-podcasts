<?php
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
  /**
   * Plugin Name: Subscribed Podcasts
   * Plugin URI: https://github.com/sethiele/subscribed-podcasts
   * Description: Display your subscribed podcasts
   * Version: 0.0.1-pre
   * Author: Sebastian
   * Author URI: http://sebastian-thiele.net
   * Text Domain: subpod
   * Domain Path: /locale/
   * License: MIT
   */

  // Load I18n
  load_plugin_textdomain('subpod', false, basename( dirname( __FILE__ ) ) . '/locale' );

  include('subpod-admin.inc.php');
?>