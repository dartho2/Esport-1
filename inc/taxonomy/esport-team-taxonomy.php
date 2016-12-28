<?php
/*
	===============================
		ESPORT TEAM TAXONOMY 
	===============================

*/
function esport_team_taxonomy(){
	$labels = array(
		'name'				=> 'League',
		'singular_name'		=> 'League',
		'search_items'		=> 'Search League',
		'all_items'			=> 'All League',
		'parent_item'		=> 'Parent League',
		'parent_item_colon'	=> 'Parent League',
		'edit_item'			=> 'Edit League',
		'update_item'		=> 'Update League',
		'add_new_item'		=> 'Add New League',
		'new_item_name'		=> 'New League Name',
		'menu_name'			=> 'League'
	);
	$args = array(
		'hierachical'		=> true,
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		'rewrite'			=> array('slug' => 'league')
	);
	register_taxonomy('league',array('esport-teams'), $args);
	
}
add_action('init', 'esport_team_taxonomy');
?>