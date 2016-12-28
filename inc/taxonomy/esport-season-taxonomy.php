<?php
/*
	===============================
		ESPORT TEAM TAXONOMY 
	===============================

*/


function esport_season_taxonomy(){
	$labels = array(
		'name'				=> 'Season',
		'singular_name'		=> 'Season',
		'search_items'		=> 'Search Season',
		'all_items'			=> 'All Season',
		'parent_item'		=> 'Parent Season',
		'parent_item_colon'	=> 'Parent Season',
		'edit_item'			=> 'Edit Season',
		'update_item'		=> 'Update Season',
		'add_new_item'		=> 'Add New Season',
		'new_item_name'		=> 'New Season Name',
		'menu_name'			=> 'Season'
	);
	$args = array(
		'hierachical'		=> true,
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		'rewrite'			=> array('slug' => 'season')
	);
	register_taxonomy('season',array('esport-teams'), $args);
	
}
add_action('init', 'esport_season_taxonomy');
?>