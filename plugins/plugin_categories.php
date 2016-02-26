<?php
// Register Custom Taxonomy
function wrdsb_plugin_categories_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Plugin Categories', 'Taxonomy General Name', 'wrdsb_plugins' ),
		'singular_name'              => _x( 'Plugin Category', 'Taxonomy Singular Name', 'wrdsb_plugins' ),
		'menu_name'                  => __( 'Plugin Categories', 'wrdsb_plugins' ),
		'all_items'                  => __( 'All Plugin Categories', 'wrdsb_plugins' ),
		'parent_item'                => __( 'Parent Plugin Category', 'wrdsb_plugins' ),
		'parent_item_colon'          => __( 'Parent Plugin Category:', 'wrdsb_plugins' ),
		'new_item_name'              => __( 'New Plugin Category Name', 'wrdsb_plugins' ),
		'add_new_item'               => __( 'Add New Plugin Category', 'wrdsb_plugins' ),
		'edit_item'                  => __( 'Edit Plugin Category', 'wrdsb_plugins' ),
		'update_item'                => __( 'Update Plugin Category', 'wrdsb_plugins' ),
		'view_item'                  => __( 'View Plugin Category', 'wrdsb_plugins' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wrdsb_plugins' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wrdsb_plugins' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_plugins' ),
		'popular_items'              => __( 'Popular Plugin Categories', 'wrdsb_plugins' ),
		'search_items'               => __( 'Search Plugin Categories', 'wrdsb_plugins' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_plugins' ),
		'no_terms'                   => __( 'No plugin categories', 'wrdsb_plugins' ),
		'items_list'                 => __( 'Plugin Categories list', 'wrdsb_plugins' ),
		'items_list_navigation'      => __( 'Plugin categories list navigation', 'wrdsb_plugins' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'wrdsb_plugin_categories', array( 'wrdsb_plugin' ), $args );

}
add_action( 'init', 'wrdsb_plugin_categories_custom_taxonomy', 0 );
