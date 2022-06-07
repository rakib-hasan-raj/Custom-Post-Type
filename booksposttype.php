<?php
/**

* Plugin Name: Book Custom post type

* Plugin URI: N/A

* Description: A plugin to create a custom post type for Books

* Version:  1.0

* Author: Rakib Hasan

* Author URI:https://rakibhasanraj.com/


*/

add_action( 'init', 'book_init' );

/**

* Register a book post type.

*

*/

function codex_book_init() {

$labels = array(

'name'               => __( 'Books', 'post type general name', 'your-plugin-textdomain' ),

'singular_name'      => __( 'Book', 'post type singular name', 'your-plugin-textdomain' )

);

register_post_type( 'book', $args );

}

function book_init() {

$labels = array(

'name' => __( 'Books', 'post type general name', 'your-plugin-textdomain' ),

'singular_name'=> __( 'Book', 'post type singular name', 'your-plugin-textdomain' ),

'menu_name' => __( 'Books', 'admin menu', 'your-plugin-textdomain' ),

'name_admin_bar'=> __( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),

'add_new'   => __( 'Add New', 'book', 'your-plugin-textdomain' ),

'add_new_item'=> __( 'Add New Book', 'your-plugin-textdomain' ),

'new_item'    => __( 'New Book', 'your-plugin-textdomain' ),

'edit_item'     => __( 'Edit Book', 'your-plugin-textdomain' ),

'view_item'   => __( 'View Book', 'your-plugin-textdomain' ),

'all_items'     => __( 'All Books', 'your-plugin-textdomain' ),

'search_items'=> __( 'Search Books', 'your-plugin-textdomain' ),

'parent_item_colon' => __( 'Parent Books:', 'your-plugin-textdomain' ),

'not_found'  => __( 'No books found.', 'your-plugin-textdomain' ),

'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )

);

$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'Hierarchical’       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' )
	);