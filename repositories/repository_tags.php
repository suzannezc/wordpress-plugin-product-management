<?php
// Register Custom Taxonomy
function wrdsb_repository_tags_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Repository Tags', 'Taxonomy General Name', 'wrdsb_repositories' ),
		'singular_name'              => _x( 'Repository Tag', 'Taxonomy Singular Name', 'wrdsb_repositories' ),
		'menu_name'                  => __( 'Repository Tags', 'wrdsb_repositories' ),
		'all_items'                  => __( 'All Repository Tags', 'wrdsb_repositories' ),
		'parent_item'                => __( 'Parent Repository Tag', 'wrdsb_repositories' ),
		'parent_item_colon'          => __( 'Parent Repository Tag:', 'wrdsb_repositories' ),
		'new_item_name'              => __( 'New Repository Tag Name', 'wrdsb_repositories' ),
		'add_new_item'               => __( 'Add New Repository Tag', 'wrdsb_repositories' ),
		'edit_item'                  => __( 'Edit Repository Tag', 'wrdsb_repositories' ),
		'update_item'                => __( 'Update Repository Tag', 'wrdsb_repositories' ),
		'view_item'                  => __( 'View Repository Tag', 'wrdsb_repositories' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wrdsb_repositories' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wrdsb_repositories' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_repositories' ),
		'popular_items'              => __( 'Popular Repository Tags', 'wrdsb_repositories' ),
		'search_items'               => __( 'Search Repository Tags', 'wrdsb_repositories' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_repositories' ),
		'no_terms'                   => __( 'No progect tags', 'wrdsb_repositories' ),
		'items_list'                 => __( 'Repository tags list', 'wrdsb_repositories' ),
		'items_list_navigation'      => __( 'Repository tags list navigation', 'wrdsb_repositories' ),
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
	register_taxonomy( 'wrdsb_repository_tags', array( 'wrdsb_repository' ), $args );

}
add_action( 'init', 'wrdsb_repository_tags_custom_taxonomy', 0 );
