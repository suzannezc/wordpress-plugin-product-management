<?php
// Register Custom Taxonomy
function wrdsb_project_tags_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Project Tags', 'Taxonomy General Name', 'wrdsb_projects' ),
		'singular_name'              => _x( 'Project Tag', 'Taxonomy Singular Name', 'wrdsb_projects' ),
		'menu_name'                  => __( 'Project Tags', 'wrdsb_projects' ),
		'all_items'                  => __( 'All Project Tags', 'wrdsb_projects' ),
		'parent_item'                => __( 'Parent Project Tag', 'wrdsb_projects' ),
		'parent_item_colon'          => __( 'Parent Project Tag:', 'wrdsb_projects' ),
		'new_item_name'              => __( 'New Project Tag Name', 'wrdsb_projects' ),
		'add_new_item'               => __( 'Add New Project Tag', 'wrdsb_projects' ),
		'edit_item'                  => __( 'Edit Project Tag', 'wrdsb_projects' ),
		'update_item'                => __( 'Update Project Tag', 'wrdsb_projects' ),
		'view_item'                  => __( 'View Project Tag', 'wrdsb_projects' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wrdsb_projects' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wrdsb_projects' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_projects' ),
		'popular_items'              => __( 'Popular Project Tags', 'wrdsb_projects' ),
		'search_items'               => __( 'Search Project Tags', 'wrdsb_projects' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_projects' ),
		'no_terms'                   => __( 'No progect tags', 'wrdsb_projects' ),
		'items_list'                 => __( 'Project tags list', 'wrdsb_projects' ),
		'items_list_navigation'      => __( 'Project tags list navigation', 'wrdsb_projects' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'wrdsb_project_tags', array( 'wrdsb_project' ), $args );

}
add_action( 'init', 'wrdsb_project_tags_custom_taxonomy', 0 );
