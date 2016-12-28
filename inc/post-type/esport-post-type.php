<?php
/*
	===============================
		ESPORT POST TYPE - CPT 
	===============================

*/
	add_action( 'init', 'esport_post_type');	
	add_action( 'init', 'esport_post_event');	
	add_filter( 'manage_esport-teams_posts_columns', 'sunset_set_teams_columns' );
	add_action( 'manage_esport-teams_posts_custom_column', 'sunset_teams_custom_column', 10, 2);
	
	
function esport_post_type(){
	$labels = array(
		'name'				=> 'Teams',
		'singuar_name'		=> 'Team',
		'menu_name'			=> 'Teams',
		'name_admin_bar'	=> 'Team',
		'all_items'			=> 'All Teams',
		'parent_item'		=> 'Parent Team',
		'parent_item_colon'	=> 'Parent Team',
		'edit_item'			=> 'Edit Team',
		'update_item'		=> 'Update Team',
		'add_new_item'		=> 'Add Team',
		'new_item_name'		=> 'New Team Name',
		'menu_name'			=> 'Team'
		);
		
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'page',
		'hierarchical'		=> true,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-shield-alt',
		'supports'			=> array( 'title', 'editor', 'author','thumbnail', 'league','season'),
		'taxonomy'			=> true
	);	
	register_post_type( 'esport-teams', $args );
	
}
	
function esport_post_event(){
	$labels = array(
		'name'			=> 'Events',
		'singuar_name'	=> 'Event',
		'menu_name'		=> 'Events',
		'name_admin_bar'=> 'Event'
		);
		
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'page',
		'hierarchical'		=> true,
		'menu_position'		=> 27,
		'menu_icon'			=> 'dashicons-calendar-alt',
		'supports'			=> array( 'title', 'editor', 'author','thumbnail'),
		'taxonomy'			=> true
	);	
	register_post_type( 'esport-event', $args );
	
}
/* Funkcja zmieniajaca wyglad teams */
function sunset_set_teams_columns( $columns ){
	$newColumns =array();
	$newColumns['league'] = 'league';
	$newColumns['season'] = 'season';
	$newColumns['icon'] = 'icon';
	$newColumns['title'] = 'Teams';
	return $newColumns;

}
function sunset_teams_custom_column($column, $post_id){
	switch( $column ){
	case 'league' :
echo get_terms( 'league');
		break;
		case 'Season' :
echo "taxonomy_get";
		break;
	case 'icon' :
	echo get_the_post_thumbnail($post = null, array( 50, 50), $attr = '');
		break;
		
	}
}


?>