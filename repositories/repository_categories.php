<?php
// Register Custom Taxonomy
function wrdsb_repository_categories_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Repository Categories', 'Taxonomy General Name', 'wrdsb_repositorys' ),
		'singular_name'              => _x( 'Repository Category', 'Taxonomy Singular Name', 'wrdsb_repositorys' ),
		'menu_name'                  => __( 'Repository Categories', 'wrdsb_repositorys' ),
		'all_items'                  => __( 'All Repository Categories', 'wrdsb_repositorys' ),
		'parent_item'                => __( 'Parent Repository Category', 'wrdsb_repositorys' ),
		'parent_item_colon'          => __( 'Parent Repository Category:', 'wrdsb_repositorys' ),
		'new_item_name'              => __( 'New Repository Category Name', 'wrdsb_repositorys' ),
		'add_new_item'               => __( 'Add New Repository Category', 'wrdsb_repositorys' ),
		'edit_item'                  => __( 'Edit Repository Category', 'wrdsb_repositorys' ),
		'update_item'                => __( 'Update Repository Category', 'wrdsb_repositorys' ),
		'view_item'                  => __( 'View Repository Category', 'wrdsb_repositorys' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wrdsb_repositorys' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wrdsb_repositorys' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_repositorys' ),
		'popular_items'              => __( 'Popular Repository Categories', 'wrdsb_repositorys' ),
		'search_items'               => __( 'Search Repository Categories', 'wrdsb_repositorys' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_repositorys' ),
		'no_terms'                   => __( 'No repository categories', 'wrdsb_repositorys' ),
		'items_list'                 => __( 'Repository Categories list', 'wrdsb_repositorys' ),
		'items_list_navigation'      => __( 'Repository categories list navigation', 'wrdsb_repositorys' ),
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
