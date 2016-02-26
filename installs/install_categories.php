<?php
// Register Custom Taxonomy
function wrdsb_install_categories_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Install Categories', 'Taxonomy General Name', 'wrdsb_installs' ),
		'singular_name'              => _x( 'Install Category', 'Taxonomy Singular Name', 'wrdsb_installs' ),
		'menu_name'                  => __( 'Install Categories', 'wrdsb_installs' ),
		'all_items'                  => __( 'All Install Categories', 'wrdsb_installs' ),
		'parent_item'                => __( 'Parent Install Category', 'wrdsb_installs' ),
		'parent_item_colon'          => __( 'Parent Install Category:', 'wrdsb_installs' ),
		'new_item_name'              => __( 'New Install Category Name', 'wrdsb_installs' ),
		'add_new_item'               => __( 'Add New Install Category', 'wrdsb_installs' ),
		'edit_item'                  => __( 'Edit Install Category', 'wrdsb_installs' ),
		'update_item'                => __( 'Update Install Category', 'wrdsb_installs' ),
		'view_item'                  => __( 'View Install Category', 'wrdsb_installs' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wrdsb_installs' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wrdsb_installs' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_installs' ),
		'popular_items'              => __( 'Popular Install Categories', 'wrdsb_installs' ),
		'search_items'               => __( 'Search Install Categories', 'wrdsb_installs' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_installs' ),
		'no_terms'                   => __( 'No install categories', 'wrdsb_installs' ),
		'items_list'                 => __( 'Install Categories list', 'wrdsb_installs' ),
		'items_list_navigation'      => __( 'Install categories list navigation', 'wrdsb_installs' ),
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
	register_taxonomy( 'wrdsb_install_categories', array( 'wrdsb_install' ), $args );

}
add_action( 'init', 'wrdsb_install_categories_custom_taxonomy', 0 );
