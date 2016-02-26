<?php
// Register Custom Taxonomy
function wrdsb_case_categories_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Case Categories', 'Taxonomy General Name', 'wrdsb_cases' ),
		'singular_name'              => _x( 'Case Category', 'Taxonomy Singular Name', 'wrdsb_cases' ),
		'menu_name'                  => __( 'Case Categories', 'wrdsb_cases' ),
		'all_items'                  => __( 'All Case Categories', 'wrdsb_cases' ),
		'parent_item'                => __( 'Parent Case Category', 'wrdsb_cases' ),
		'parent_item_colon'          => __( 'Parent Case Category:', 'wrdsb_cases' ),
		'new_item_name'              => __( 'New Case Category Name', 'wrdsb_cases' ),
		'add_new_item'               => __( 'Add New Case Category', 'wrdsb_cases' ),
		'edit_item'                  => __( 'Edit Case Category', 'wrdsb_cases' ),
		'update_item'                => __( 'Update Case Category', 'wrdsb_cases' ),
		'view_item'                  => __( 'View Case Category', 'wrdsb_cases' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wrdsb_cases' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wrdsb_cases' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_cases' ),
		'popular_items'              => __( 'Popular Case Categories', 'wrdsb_cases' ),
		'search_items'               => __( 'Search Case Categories', 'wrdsb_cases' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_cases' ),
		'no_terms'                   => __( 'No case categories', 'wrdsb_cases' ),
		'items_list'                 => __( 'Case Categories list', 'wrdsb_cases' ),
		'items_list_navigation'      => __( 'Case categories list navigation', 'wrdsb_cases' ),
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
	register_taxonomy( 'wrdsb_case_categories', array( 'wrdsb_case' ), $args );

}
add_action( 'init', 'wrdsb_case_categories_custom_taxonomy', 0 );
