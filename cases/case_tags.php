<?php
// Register Custom Taxonomy
function wrdsb_case_tags_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Case Tags', 'Taxonomy General Name', 'wrdsb_cases' ),
		'singular_name'              => _x( 'Case Tag', 'Taxonomy Singular Name', 'wrdsb_cases' ),
		'menu_name'                  => __( 'Case Tags', 'wrdsb_cases' ),
		'all_items'                  => __( 'All Case Tags', 'wrdsb_cases' ),
		'parent_item'                => __( 'Parent Case Tag', 'wrdsb_cases' ),
		'parent_item_colon'          => __( 'Parent Case Tag:', 'wrdsb_cases' ),
		'new_item_name'              => __( 'New Case Tag Name', 'wrdsb_cases' ),
		'add_new_item'               => __( 'Add New Case Tag', 'wrdsb_cases' ),
		'edit_item'                  => __( 'Edit Case Tag', 'wrdsb_cases' ),
		'update_item'                => __( 'Update Case Tag', 'wrdsb_cases' ),
		'view_item'                  => __( 'View Case Tag', 'wrdsb_cases' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wrdsb_cases' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wrdsb_cases' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_cases' ),
		'popular_items'              => __( 'Popular Case Tags', 'wrdsb_cases' ),
		'search_items'               => __( 'Search Case Tags', 'wrdsb_cases' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_cases' ),
		'no_terms'                   => __( 'No progect tags', 'wrdsb_cases' ),
		'items_list'                 => __( 'Case tags list', 'wrdsb_cases' ),
		'items_list_navigation'      => __( 'Case tags list navigation', 'wrdsb_cases' ),
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
	register_taxonomy( 'wrdsb_case_tags', array( 'wrdsb_case' ), $args );

}
add_action( 'init', 'wrdsb_case_tags_custom_taxonomy', 0 );
