<?php
// Register Custom Post Type
function wrdsb_install_post_type() {

	$labels = array(
		'name'                  => _x( 'Installs', 'Post Type General Name', 'wrdsb_installs' ),
		'singular_name'         => _x( 'Install', 'Post Type Singular Name', 'wrdsb_installs' ),
		'menu_name'             => __( 'Installs', 'wrdsb_installs' ),
		'name_admin_bar'        => __( 'Install', 'wrdsb_installs' ),
		'archives'              => __( 'Install Archives', 'wrdsb_installs' ),
		'parent_item_colon'     => __( 'Parent Install:', 'wrdsb_installs' ),
		'all_items'             => __( 'All Installs', 'wrdsb_installs' ),
		'add_new_item'          => __( 'Add New Install', 'wrdsb_installs' ),
		'add_new'               => __( 'Add New', 'wrdsb_installs' ),
		'new_item'              => __( 'New Install', 'wrdsb_installs' ),
		'edit_item'             => __( 'Edit Install', 'wrdsb_installs' ),
		'update_item'           => __( 'Update Install', 'wrdsb_installs' ),
		'view_item'             => __( 'View Install', 'wrdsb_installs' ),
		'search_items'          => __( 'Search Install', 'wrdsb_installs' ),
		'not_found'             => __( 'Not found', 'wrdsb_installs' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_installs' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_installs' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_installs' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_installs' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_installs' ),
		'insert_into_item'      => __( 'Insert into install', 'wrdsb_installs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this install', 'wrdsb_installs' ),
		'items_list'            => __( 'Installs list', 'wrdsb_installs' ),
		'items_list_navigation' => __( 'Installs list navigation', 'wrdsb_installs' ),
		'filter_items_list'     => __( 'Filter installs list', 'wrdsb_installs' ),
	);
	$args = array(
		'label'                 => __( 'Install', 'wrdsb_installs' ),
		'description'           => __( 'A install', 'wrdsb_installs' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		'taxonomies'            => array( 'wrdsb_install_categories', 'wrdsb_install_tags' ),
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
	register_post_type( 'wrdsb_install', $args );

}
add_action( 'init', 'wrdsb_install_post_type', 0 );

