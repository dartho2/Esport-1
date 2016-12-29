<?php
/*
	===============================
		ESPORT TEAM TAXONOMY 
	===============================

*/


function esport_season_taxonomy(){
	$labels = array(
		'name'				=> __('Season', 'esports'),
		'singular_name'		=> __('Season', 'esports'),
		'search_items'		=> __('Search Season', 'esports'),
		'all_items'			=> __('All Season', 'esports'),
		'parent_item'		=> __('Parent Season', 'esports'),
		'parent_item_colon'	=> __('Parent Season', 'esports'),
		'edit_item'			=> __('Edit Season', 'esports'),
		'update_item'		=> __('Update Season', 'esports'),
		'add_new_item'		=> __('Add New Season', 'esports'),
		'new_item_name'		=> __('New Season Name', 'esports'),
		'menu_name'			=> __('Season', 'esports'),
	);
	$args = array(
		'hierachical'		=> true,
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		'rewrite'			=> array('slug' => 'Season')
	);
	register_taxonomy('season',array('esport-teams'), $args);
	
}
add_action('init', 'esport_season_taxonomy');
?>