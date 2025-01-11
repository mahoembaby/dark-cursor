<?php

/**
 * 
 * Plugin Name:       Dark Style
 * Plugin URI:        https://github.com/mahoembaby/dark-cursor
 * Description:       This plugin change style of cursor and scrollbar and selection of website
 * Version:           1.0
 * Author:            Mahmoud Hosny
 * Author URI:        https://github.com/mahoembaby
 */

 if(!defined('ABSPATH')) {
   exit;
}



 add_action('wp_enqueue_scripts', 'add_dark_cursor');

 function add_dark_cursor() {
    wp_enqueue_style(
      'dark-cursor-css',
      plugin_dir_url(__FILE__) . 'css/style.css',
      [],
      '1.0',
      'all'
    );
 }