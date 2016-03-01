<?php
// Register Custom Taxonomy
function wrdsb_repository_categories_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Repository Categories', 'Taxonomy General Name', 'wrdsb_repositories' ),
		'singular_name'              => _x( 'Repository Category', 'Taxonomy Singular Name', 'wrdsb_repositories' ),
		'menu_name'                  => __( 'Repository Categories', 'wrdsb_repositories' ),
		'all_items'                  => __( 'All Repository Categories', 'wrdsb_repositories' ),
		'parent_item'                => __( 'Parent Repository Category', 'wrdsb_repositories' ),
		'parent_item_colon'          => __( 'Parent Repository Category:', 'wrdsb_repositories' ),
		'new_item_name'              => __( 'New Repository Category Name', 'wrdsb_repositories' ),
		'add_new_item'               => __( 'Add New Repository Category', 'wrdsb_repositories' ),
		'edit_item'                  => __( 'Edit Repository Category', 'wrdsb_repositories' ),
		'update_item'                => __( 'Update Repository Category', 'wrdsb_repositories' ),
		'view_item'                  => __( 'View Repository Category', 'wrdsb_repositories' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wrdsb_repositories' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wrdsb_repositories' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_repositories' ),
		'popular_items'              => __( 'Popular Repository Categories', 'wrdsb_repositories' ),
		'search_items'               => __( 'Search Repository Categories', 'wrdsb_repositories' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_repositories' ),
		'no_terms'                   => __( 'No repository categories', 'wrdsb_repositories' ),
		'items_list'                 => __( 'Repository Categories list', 'wrdsb_repositories' ),
		'items_list_navigation'      => __( 'Repository categories list navigation', 'wrdsb_repositories' ),
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
	register_taxonomy( 'wrdsb_repository_categories', array( 'wrdsb_repository' ), $args );

}
add_action( 'init', 'wrdsb_repository_categories_custom_taxonomy', 0 );
