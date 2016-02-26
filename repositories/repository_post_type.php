<?php
// Register Custom Post Type
function wrdsb_repository_post_type() {

	$labels = array(
		'name'                  => _x( 'Repositorys', 'Post Type General Name', 'wrdsb_repositorys' ),
		'singular_name'         => _x( 'Repository', 'Post Type Singular Name', 'wrdsb_repositorys' ),
		'menu_name'             => __( 'Repositorys', 'wrdsb_repositorys' ),
		'name_admin_bar'        => __( 'Repository', 'wrdsb_repositorys' ),
		'archives'              => __( 'Repository Archives', 'wrdsb_repositorys' ),
		'parent_item_colon'     => __( 'Parent Repository:', 'wrdsb_repositorys' ),
		'all_items'             => __( 'All Repositorys', 'wrdsb_repositorys' ),
		'add_new_item'          => __( 'Add New Repository', 'wrdsb_repositorys' ),
		'add_new'               => __( 'Add New', 'wrdsb_repositorys' ),
		'new_item'              => __( 'New Repository', 'wrdsb_repositorys' ),
		'edit_item'             => __( 'Edit Repository', 'wrdsb_repositorys' ),
		'update_item'           => __( 'Update Repository', 'wrdsb_repositorys' ),
		'view_item'             => __( 'View Repository', 'wrdsb_repositorys' ),
		'search_items'          => __( 'Search Repository', 'wrdsb_repositorys' ),
		'not_found'             => __( 'Not found', 'wrdsb_repositorys' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_repositorys' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_repositorys' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_repositorys' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_repositorys' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_repositorys' ),
		'insert_into_item'      => __( 'Insert into repository', 'wrdsb_repositorys' ),
		'uploaded_to_this_item' => __( 'Uploaded to this repository', 'wrdsb_repositorys' ),
		'items_list'            => __( 'Repositorys list', 'wrdsb_repositorys' ),
		'items_list_navigation' => __( 'Repositorys list navigation', 'wrdsb_repositorys' ),
		'filter_items_list'     => __( 'Filter repositorys list', 'wrdsb_repositorys' ),
	);
	$args = array(
		'label'                 => __( 'Repository', 'wrdsb_repositorys' ),
		'description'           => __( 'A repository', 'wrdsb_repositorys' ),
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

