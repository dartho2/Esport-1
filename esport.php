<?php
/**
 * Plugin Name: Esports
 * Plugin URI: 
 * Description: .
 * Version: 
 * Author: 
 * Author URI: 
 * Requires at least: 3.8
 * Tested up to: 0.1
 *
 * Text Domain: sportspress
 * Domain Path: /languages/

 */
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
	
}
define( 'ESPORT_PATH', plugin_dir_path( __FILE__ ) );
require_once ( ESPORT_PATH . '/inc/function-admin.php');
require_once ( ESPORT_PATH . '/inc/post-type/esport-post-type.php');


?>