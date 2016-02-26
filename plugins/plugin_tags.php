<?php
// Register Custom Taxonomy
function wrdsb_plugin_tags_custom_taxonomy() {

	$labels = array(
		'name'                       => 'Plugin Tags',
		'singular_name'              => 'Plugin Tag',
		'menu_name'                  => 'Plugin Tags',
		'all_items'                  => 'All Plugin Tags',
		'parent_item'                => 'Parent Plugin Tag',
		'parent_item_colon'          => 'Parent Plugin Tag:',
		'new_item_name'              => 'New Plugin Tag Name',
		'add_new_item'               => 'Add New Plugin Tag',
		'edit_item'                  => 'Edit Plugin Tag',
		'update_item'                => 'Update Plugin Tag',
		'view_item'                  => 'View Plugin Tag',
		'separate_items_with_commas' => 'Separate tags with commas',
		'add_or_remove_items'        => 'Add or remove tags',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Plugin Tags',
		'search_items'               => 'Search Plugin Tags',
		'not_found'                  => 'Not Found',
		'items_list'                 => 'Plugin Tags list',
		'items_list_navigation'      => 'Plugin Tags list navigation',
	);
	$rewrite = array(
		'slug'                       => 'plugin-tags',
		'with_front'                 => false,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'wrdsb_plugin_tags', array( 'post', 'page', 'wrdsb_plugin' ), $args );

}
add_action( 'init', 'wrdsb_plugin_tags_custom_taxonomy', 0 );
