<?php 
// Register Custom Post Type
function wrdsb_project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'wrdsb_projects' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'wrdsb_projects' ),
		'menu_name'             => __( 'Projects', 'wrdsb_projects' ),
		'name_admin_bar'        => __( 'Project', 'wrdsb_projects' ),
		'archives'              => __( 'Project Archives', 'wrdsb_projects' ),
		'parent_item_colon'     => __( 'Parent Project:', 'wrdsb_projects' ),
		'all_items'             => __( 'All Projects', 'wrdsb_projects' ),
		'add_new_item'          => __( 'Add New Project', 'wrdsb_projects' ),
		'add_new'               => __( 'Add New', 'wrdsb_projects' ),
		'new_item'              => __( 'New Project', 'wrdsb_projects' ),
		'edit_item'             => __( 'Edit Project', 'wrdsb_projects' ),
		'update_item'           => __( 'Update Project', 'wrdsb_projects' ),
		'view_item'             => __( 'View Project', 'wrdsb_projects' ),
		'search_items'          => __( 'Search Project', 'wrdsb_projects' ),
		'not_found'             => __( 'Not found', 'wrdsb_projects' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_projects' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_projects' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_projects' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_projects' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_projects' ),
		'insert_into_item'      => __( 'Insert into project', 'wrdsb_projects' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'wrdsb_projects' ),
		'items_list'            => __( 'Projects list', 'wrdsb_projects' ),
		'items_list_navigation' => __( 'Projects list navigation', 'wrdsb_projects' ),
		'filter_items_list'     => __( 'Filter projects list', 'wrdsb_projects' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'wrdsb_projects' ),
		'description'           => __( 'A project', 'wrdsb_projects' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'wrdsb_project_categories', 'wrdsb_project_tags' ),
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
	register_post_type( 'wrdsb_project', $args );

}
add_action( 'init', 'wrdsb_project_post_type', 0 );
