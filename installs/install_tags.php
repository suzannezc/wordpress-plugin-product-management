<?php
// Register Custom Taxonomy
function wrdsb_install_tags_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Install Tags', 'Taxonomy General Name', 'wrdsb_installs' ),
		'singular_name'              => _x( 'Install Tag', 'Taxonomy Singular Name', 'wrdsb_installs' ),
		'menu_name'                  => __( 'Install Tags', 'wrdsb_installs' ),
		'all_items'                  => __( 'All Install Tags', 'wrdsb_installs' ),
		'parent_item'                => __( 'Parent Install Tag', 'wrdsb_installs' ),
		'parent_item_colon'          => __( 'Parent Install Tag:', 'wrdsb_installs' ),
		'new_item_name'              => __( 'New Install Tag Name', 'wrdsb_installs' ),
		'add_new_item'               => __( 'Add New Install Tag', 'wrdsb_installs' ),
		'edit_item'                  => __( 'Edit Install Tag', 'wrdsb_installs' ),
		'update_item'                => __( 'Update Install Tag', 'wrdsb_installs' ),
		'view_item'                  => __( 'View Install Tag', 'wrdsb_installs' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wrdsb_installs' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wrdsb_installs' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_installs' ),
		'popular_items'              => __( 'Popular Install Tags', 'wrdsb_installs' ),
		'search_items'               => __( 'Search Install Tags', 'wrdsb_installs' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_installs' ),
		'no_terms'                   => __( 'No progect tags', 'wrdsb_installs' ),
		'items_list'                 => __( 'Install tags list', 'wrdsb_installs' ),
		'items_list_navigation'      => __( 'Install tags list navigation', 'wrdsb_installs' ),
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
	register_taxonomy( 'wrdsb_install_tags', array( 'post', 'page', 'wrdsb_install' ), $args );

}
add_action( 'init', 'wrdsb_install_tags_custom_taxonomy', 0 );
