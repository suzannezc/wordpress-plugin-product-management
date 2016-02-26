<?php
// Register Custom Post Type
function wrdsb_plugin_post_type() {
	$labels = array(
		'name'                  => _x( 'Plugins', 'Post Type General Name', 'wrdsb_plugins' ),
		'singular_name'         => _x( 'Plugin', 'Post Type Singular Name', 'wrdsb_plugins' ),
		'menu_name'             => __( 'Plugins', 'wrdsb_plugins' ),
		'name_admin_bar'        => __( 'Plugin', 'wrdsb_plugins' ),
		'archives'              => __( 'Plugin Archives', 'wrdsb_plugins' ),
		'parent_item_colon'     => __( 'Parent Plugin:', 'wrdsb_plugins' ),
		'all_items'             => __( 'All Plugins', 'wrdsb_plugins' ),
		'add_new_item'          => __( 'Add New Plugin', 'wrdsb_plugins' ),
		'add_new'               => __( 'Add New', 'wrdsb_plugins' ),
		'new_item'              => __( 'New Plugin', 'wrdsb_plugins' ),
		'edit_item'             => __( 'Edit Plugin', 'wrdsb_plugins' ),
		'update_item'           => __( 'Update Plugin', 'wrdsb_plugins' ),
		'view_item'             => __( 'View Plugin', 'wrdsb_plugins' ),
		'search_items'          => __( 'Search Plugin', 'wrdsb_plugins' ),
		'not_found'             => __( 'Not found', 'wrdsb_plugins' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_plugins' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_plugins' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_plugins' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_plugins' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_plugins' ),
		'insert_into_item'      => __( 'Insert into plugin', 'wrdsb_plugins' ),
		'uploaded_to_this_item' => __( 'Uploaded to this plugin', 'wrdsb_plugins' ),
		'items_list'            => __( 'Plugins list', 'wrdsb_plugins' ),
		'items_list_navigation' => __( 'Plugins list navigation', 'wrdsb_plugins' ),
		'filter_items_list'     => __( 'Filter plugins list', 'wrdsb_plugins' ),
	);
	$args = array(
		'label'                 => __( 'Plugin', 'wrdsb_plugins' ),
		'description'           => __( 'A plugin', 'wrdsb_plugins' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		'taxonomies'            => array( 'wrdsb_plugin_categories', 'wrdsb_plugin_tags' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wrdsb_plugin', $args );
}
add_action( 'init', 'wrdsb_plugin_post_type', 0 );

