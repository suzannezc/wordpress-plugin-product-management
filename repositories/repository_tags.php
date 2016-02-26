<?php
// Register Custom Taxonomy
function wrdsb_repository_tags_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Repository Tags', 'Taxonomy General Name', 'wrdsb_repositorys' ),
		'singular_name'              => _x( 'Repository Tag', 'Taxonomy Singular Name', 'wrdsb_repositorys' ),
		'menu_name'                  => __( 'Repository Tags', 'wrdsb_repositorys' ),
		'all_items'                  => __( 'All Repository Tags', 'wrdsb_repositorys' ),
		'parent_item'                => __( 'Parent Repository Tag', 'wrdsb_repositorys' ),
		'parent_item_colon'          => __( 'Parent Repository Tag:', 'wrdsb_repositorys' ),
		'new_item_name'              => __( 'New Repository Tag Name', 'wrdsb_repositorys' ),
		'add_new_item'               => __( 'Add New Repository Tag', 'wrdsb_repositorys' ),
		'edit_item'                  => __( 'Edit Repository Tag', 'wrdsb_repositorys' ),
		'update_item'                => __( 'Update Repository Tag', 'wrdsb_repositorys' ),
		'view_item'                  => __( 'View Repository Tag', 'wrdsb_repositorys' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wrdsb_repositorys' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wrdsb_repositorys' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_repositorys' ),
		'popular_items'              => __( 'Popular Repository Tags', 'wrdsb_repositorys' ),
		'search_items'               => __( 'Search Repository Tags', 'wrdsb_repositorys' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_repositorys' ),
		'no_terms'                   => __( 'No progect tags', 'wrdsb_repositorys' ),
		'items_list'                 => __( 'Repository tags list', 'wrdsb_repositorys' ),
		'items_list_navigation'      => __( 'Repository tags list navigation', 'wrdsb_repositorys' ),
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
	register_taxonomy( 'wrdsb_repository_tags', array( 'post', 'page', 'wrdsb_repository' ), $args );

}
add_action( 'init', 'wrdsb_repository_tags_custom_taxonomy', 0 );
