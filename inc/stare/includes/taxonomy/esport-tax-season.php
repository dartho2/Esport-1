<?php
// Register Custom Taxonomy

function season_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Sesson', 'Taxonomy General Name', 'esport' ),
		'singular_name'              => _x( 'Sesson', 'Taxonomy Singular Name', 'esport' ),
		'menu_name'                  => __( 'Sesson', 'esport' ),
		'all_items'                  => __( 'All Items', 'esport' ),
		'parent_item'                => __( 'Parent Item', 'esport' ),
		'parent_item_colon'          => __( 'Parent Item:', 'esport' ),
		'new_item_name'              => __( 'New Item Name', 'esport' ),
		'add_new_item'               => __( 'Add New Item', 'esport' ),
		'edit_item'                  => __( 'Edit Item', 'esport' ),
		'update_item'                => __( 'Update Item', 'esport' ),
		'view_item'                  => __( 'View Item', 'esport' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'esport' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'esport' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esport' ),
		'popular_items'              => __( 'Popular Items', 'esport' ),
		'search_items'               => __( 'Search Items', 'esport' ),
		'not_found'                  => __( 'Not Found', 'esport' ),
		'no_terms'                   => __( 'No items', 'esport' ),
		'items_list'                 => __( 'Items list', 'esport' ),
		'items_list_navigation'      => __( 'Items list navigation', 'esport' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		"singular_label" => "esport_sesson",
        'rewrite' => array('slug' => 'esport_sesson', 'with_front'    => false)
	);
	$object_types = apply_filters( 'esport_sesson', array( 'es_team' ) );
        register_taxonomy( 'es_sesson', $object_types, $args );
        foreach ( $object_types as $object_type ):
                register_taxonomy_for_object_type( 'esport_team', $object_type );
	endforeach;

}
add_action( 'init', 'season_taxonomy', 0 );
?>