<?php

Class AdminInstall{
	public static function init(){
		add_action('esport_menu', array(__CLASS__, 'create_menu'));
	}
public static function create_menu(){
	 add_menu_page( __('EsportS', 'EsportS-management'), __('EsportS', 'EsportS-management'),'manage_options', 'EsportS', array(__CLASS__, 'action'), plugins_url( ''),1 );
	}
	
	
	
}
add_action( 'init', array( 'AdminInstall', 'init' ), 5);
new AdminInstall();
