<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
Class ES_post_type {
	
	public function __construct(){
	add_action( 'init', array( __CLASS__, 'register_post_types' ), 3 );
	
	
	
	}	
	
	
	public static function register_post_types() {
		do_action( 'esport_register_post_type' );
		
		
		register_post_type( 'es_team',
			apply_filters( 'esport_register_post_type_team',
				array(
					'labels' => array(
						'name' 					=> __( 'Teams', 'esport' ),
						'singular_name' 		=> __( 'Team', 'esport' ),
						'add_new_item' 			=> __( 'Add New Team', 'esport' ),
						'edit_item' 			=> __( 'Edit Team', 'esport' ),
						'new_item' 				=> __( 'New', 'esport' ),
						'view_item' 			=> __( 'View Team', 'esport' ),
						'search_items' 			=> __( 'Search', 'esport' ),
						'not_found' 			=> __( 'No results found.', 'esport' ),
						'not_found_in_trash' 	=> __( 'No results found.', 'esport' ),
						'featured_image'		=> __( 'Logo', 'esport' ),
 						'set_featured_image' 	=> __( 'Select Logo', 'esport' ),
 						'remove_featured_image' => __( 'Remove Logo', 'esport' ),
 						'use_featured_image' 	=> __( 'Select Logo', 'esport' ),
					),
					'public' 				=> true,
					'show_ui' 				=> true,
					'map_meta_cap' 			=> true,
					'publicly_queryable' 	=> true,
					'exclude_from_search' 	=> false,
					'hierarchical' 			=> true,
					'rewrite' 				=> array( 'slug' => get_option( 'esport_team_slug', 'team' ) ),
					'supports' 				=> array( 'title', 'editor', 'author', 'thumbnail', 'page-attributes', 'excerpt' ),
					'has_archive' 			=> false,
					'show_in_nav_menus' 	=> true,
					'menu_icon' 			=> 'dashicons-shield-alt',
					'show_in_rest' 			=> true,
					'rest_controller_class' => 'SP_REST_Posts_Controller',
					'rest_base' 			=> 'team',
				)
			)
		);
	
	
}




}

new ES_post_type();
?>