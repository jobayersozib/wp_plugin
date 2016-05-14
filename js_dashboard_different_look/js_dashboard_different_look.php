<?php
/*
Plugin Name:Dashboard look change
Plugin URI: 
Description: This plugin will change dashboard menu color and fonts
Version:     0.0.1
Author:     jobayersozib
Author URI:  
License:     GPL2
License URI: 
Domain Path: /languages
Text Domain: Dashboard look change
*/

defined( 'ABSPATH' ) or die( 'No direct access!!' );

function js_dashboard_different_look(){
  wp_register_style( 'js_dashboard_look',  plugin_dir_url( __FILE__ ).'css/style.css'); 
  wp_enqueue_style( 'js_dashboard_look' );
}
add_action( 'admin_init', 'js_dashboard_different_look' );