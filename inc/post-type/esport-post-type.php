<?php
/*
	===============================
		ESPORT POST TYPE - CPT 
	===============================

*/
	add_action( 'init', 'esport_post_type');	

	add_filter( 'manage_esport-teams_posts_columns', 'sunset_set_teams_columns' );
	add_action( 'manage_esport-teams_posts_custom_column', 'sunset_teams_custom_column', 10, 2);
function esport_post_type(){
	$labels = array(
		'name'			=> 'Teams',
		'singuar_name'	=> 'Team',
		'menu_name'		=> 'Teams',
		'name_admin_bar'=> 'Team'
		);
		
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'page',
		'hierarchical'		=> true,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-shield-alt',
		'supports'			=> array( 'title', 'editor', 'author','thumbnail')
	);	
	register_post_type( 'esport-teams', $args );
	
}
/* Funkcja zmieniajaca wyglad teams */
function sunset_set_teams_columns( $columns ){
	$newColumns =array();
	$newColumns['icon'] = 'icon';
	$newColumns['title'] = 'Teams';
	return $newColumns;

}
function sunset_teams_custom_column($column, $post_id){
	switch( $column ){

	case 'icon' :
	echo get_the_post_thumbnail($post = null, array( 50, 50), $attr = '');
		break;
		
	}
}


?>