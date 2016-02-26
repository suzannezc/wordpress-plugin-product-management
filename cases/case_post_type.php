<?php
// Register Custom Post Type
function wrdsb_case_post_type() {

	$labels = array(
		'name'                  => _x( 'Cases', 'Post Type General Name', 'wrdsb_cases' ),
		'singular_name'         => _x( 'Case', 'Post Type Singular Name', 'wrdsb_cases' ),
		'menu_name'             => __( 'Cases', 'wrdsb_cases' ),
		'name_admin_bar'        => __( 'Case', 'wrdsb_cases' ),
		'archives'              => __( 'Case Archives', 'wrdsb_cases' ),
		'parent_item_colon'     => __( 'Parent Case:', 'wrdsb_cases' ),
		'all_items'             => __( 'All Cases', 'wrdsb_cases' ),
		'add_new_item'          => __( 'Add New Case', 'wrdsb_cases' ),
		'add_new'               => __( 'Add New', 'wrdsb_cases' ),
		'new_item'              => __( 'New Case', 'wrdsb_cases' ),
		'edit_item'             => __( 'Edit Case', 'wrdsb_cases' ),
		'update_item'           => __( 'Update Case', 'wrdsb_cases' ),
		'view_item'             => __( 'View Case', 'wrdsb_cases' ),
		'search_items'          => __( 'Search Case', 'wrdsb_cases' ),
		'not_found'             => __( 'Not found', 'wrdsb_cases' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_cases' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_cases' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_cases' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_cases' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_cases' ),
		'insert_into_item'      => __( 'Insert into case', 'wrdsb_cases' ),
		'uploaded_to_this_item' => __( 'Uploaded to this case', 'wrdsb_cases' ),
		'items_list'            => __( 'Cases list', 'wrdsb_cases' ),
		'items_list_navigation' => __( 'Cases list navigation', 'wrdsb_cases' ),
		'filter_items_list'     => __( 'Filter cases list', 'wrdsb_cases' ),
	);
	$args = array(
		'label'                 => __( 'Case', 'wrdsb_cases' ),
		'description'           => __( 'A case', 'wrdsb_cases' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		'taxonomies'            => array( 'wrdsb_case_categories', 'wrdsb_case_tags' ),
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
	register_post_type( 'wrdsb_case', $args );

}
add_action( 'init', 'wrdsb_case_post_type', 0 );

