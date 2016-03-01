<?php
// Register Custom Post Type
function wrdsb_repository_post_type() {

	$labels = array(
		'name'                  => _x( 'Repositories', 'Post Type General Name', 'wrdsb_repositories' ),
		'singular_name'         => _x( 'Repository', 'Post Type Singular Name', 'wrdsb_repositories' ),
		'menu_name'             => __( 'Repositories', 'wrdsb_repositories' ),
		'name_admin_bar'        => __( 'Repository', 'wrdsb_repositories' ),
		'archives'              => __( 'Repository Archives', 'wrdsb_repositories' ),
		'parent_item_colon'     => __( 'Parent Repository:', 'wrdsb_repositories' ),
		'all_items'             => __( 'All Repositories', 'wrdsb_repositories' ),
		'add_new_item'          => __( 'Add New Repository', 'wrdsb_repositories' ),
		'add_new'               => __( 'Add New', 'wrdsb_repositories' ),
		'new_item'              => __( 'New Repository', 'wrdsb_repositories' ),
		'edit_item'             => __( 'Edit Repository', 'wrdsb_repositories' ),
		'update_item'           => __( 'Update Repository', 'wrdsb_repositories' ),
		'view_item'             => __( 'View Repository', 'wrdsb_repositories' ),
		'search_items'          => __( 'Search Repository', 'wrdsb_repositories' ),
		'not_found'             => __( 'Not found', 'wrdsb_repositories' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_repositories' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_repositories' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_repositories' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_repositories' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_repositories' ),
		'insert_into_item'      => __( 'Insert into repository', 'wrdsb_repositories' ),
		'uploaded_to_this_item' => __( 'Uploaded to this repository', 'wrdsb_repositories' ),
		'items_list'            => __( 'Repositories list', 'wrdsb_repositories' ),
		'items_list_navigation' => __( 'Repositories list navigation', 'wrdsb_repositories' ),
		'filter_items_list'     => __( 'Filter repositories list', 'wrdsb_repositories' ),
	);
	$args = array(
		'label'                 => __( 'Repository', 'wrdsb_repositories' ),
		'description'           => __( 'A repository', 'wrdsb_repositories' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		'taxonomies'            => array( 'wrdsb_repository_categories', 'wrdsb_repository_tags' ),
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
	register_post_type( 'wrdsb_repository', $args );

}
add_action( 'init', 'wrdsb_repository_post_type', 0 );

