<?php
/*
	===============================
		ADMIN PAGE
	===============================

*/

	function sunset_add_admin_page(){

	add_menu_page( 'Sunset Theme Options', '$unset', 'manage_options', 'add_sunset', 'sunset_admin_page' );
	
	add_submenu_page( 'add_sunset', 'Sunset Theme Options', 'Settings', 'manage_options', 'add_sunset', 'sunset_admin_page');
	
	add_submenu_page('add_sunset', 'Theme Options', 'Options', 'manage_options', 'add_sunset_options', 'sunset_admin_setting');
	
	}
	
	add_action('admin_menu', 'sunset_add_admin_page');

	function sunset_admin_setting(){
		/* body of admin settings */
	}
	
	function sunset_theme_settings_page(){
		/* body of admin settings page */
	}
	
	function sunset_admin_page(){
	/* body of admin page informations */
	}
?>