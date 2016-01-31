<?php 
// Register Custom Post Type
function wrdsb_project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'wrdsb_projects' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'wrdsb_projects' ),
		'menu_name'             => __( 'Projects', 'wrdsb_projects' ),
		'name_admin_bar'        => __( 'Project', 'wrdsb_projects' ),
		'archives'              => __( 'Project Archives', 'wrdsb_projects' ),
		'parent_item_colon'     => __( 'Parent Project:', 'wrdsb_projects' ),
		'all_items'             => __( 'All Projects', 'wrdsb_projects' ),
		'add_new_item'          => __( 'Add New Project', 'wrdsb_projects' ),
		'add_new'               => __( 'Add New', 'wrdsb_projects' ),
		'new_item'              => __( 'New Project', 'wrdsb_projects' ),
		'edit_item'             => __( 'Edit Project', 'wrdsb_projects' ),
		'update_item'           => __( 'Update Project', 'wrdsb_projects' ),
		'view_item'             => __( 'View Project', 'wrdsb_projects' ),
		'search_items'          => __( 'Search Project', 'wrdsb_projects' ),
		'not_found'             => __( 'Not found', 'wrdsb_projects' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wrdsb_projects' ),
		'featured_image'        => __( 'Featured Image', 'wrdsb_projects' ),
		'set_featured_image'    => __( 'Set featured image', 'wrdsb_projects' ),
		'remove_featured_image' => __( 'Remove featured image', 'wrdsb_projects' ),
		'use_featured_image'    => __( 'Use as featured image', 'wrdsb_projects' ),
		'insert_into_item'      => __( 'Insert into project', 'wrdsb_projects' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'wrdsb_projects' ),
		'items_list'            => __( 'Projects list', 'wrdsb_projects' ),
		'items_list_navigation' => __( 'Projects list navigation', 'wrdsb_projects' ),
		'filter_items_list'     => __( 'Filter projects list', 'wrdsb_projects' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'wrdsb_projects' ),
		'description'           => __( 'A project', 'wrdsb_projects' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'wrdsb_project_categories', 'wrdsb_project_tags' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wrdsb_project', $args );

}
add_action( 'init', 'wrdsb_project_post_type', 0 );

/**
 * Adds a box to the main column on the Project edit screens.
 */
function wrdsb_project_add_meta_box() {
	add_meta_box(
		'wrdsb_project_sectionid',
		__( 'My Post Section Title', 'wrdsb_projects' ),
		'wrdsb_project_meta_box_callback',
		'wrdsb_project',
		'advanced',
		'high'
	);
}
add_action( 'add_meta_boxes', 'wrdsb_project_add_meta_box' );

// Move all "advanced" metaboxes above the default editor
add_action('edit_form_after_title', function() {
    global $post, $wp_meta_boxes;
    do_meta_boxes(get_current_screen(), 'advanced', $post);
    unset($wp_meta_boxes[get_post_type($post)]['advanced']);
});

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function wrdsb_project_meta_box_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'wrdsb_project_save_meta_box_data', 'wrdsb_project_meta_box_nonce' );
	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_my_meta_value_key', true );
	echo '<label for="wrdsb_project_new_field">';
	_e( 'Description for this field', 'wrdsb_projects' );
	echo '</label> ';
	echo '<input type="text" id="wrdsb_project_new_field" name="wrdsb_project_new_field" value="' . esc_attr( $value ) . '" size="25" />';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function wrdsb_project_save_meta_box_data( $post_id ) {
	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['wrdsb_project_meta_box_nonce'] ) ) {
		return;
	}
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['wrdsb_project_meta_box_nonce'], 'wrdsb_project_save_meta_box_data' ) ) {
		return;
	}
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['wrdsb_project_new_field'] ) ) {
		return;
	}
	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['wrdsb_project_new_field'] );
	// Update the meta field in the database.
	update_post_meta( $post_id, '_my_meta_value_key', $my_data );
}
add_action( 'save_post', 'wrdsb_project_save_meta_box_data' );
