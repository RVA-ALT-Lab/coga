<?php
/**
 * Custom Post Types
 *
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//fact custom post type

// Register Custom Post Type fact
// Post Type Key: fact

function create_fact_cpt() {

  $labels = array(
    'name' => __( 'Facts', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Fact', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Fact', 'textdomain' ),
    'name_admin_bar' => __( 'Fact', 'textdomain' ),
    'archives' => __( 'Fact Archives', 'textdomain' ),
    'attributes' => __( 'Fact Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Fact:', 'textdomain' ),
    'all_items' => __( 'All Facts', 'textdomain' ),
    'add_new_item' => __( 'Add New Fact', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Fact', 'textdomain' ),
    'edit_item' => __( 'Edit Fact', 'textdomain' ),
    'update_item' => __( 'Update Fact', 'textdomain' ),
    'view_item' => __( 'View Fact', 'textdomain' ),
    'view_items' => __( 'View Facts', 'textdomain' ),
    'search_items' => __( 'Search Facts', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into fact', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this fact', 'textdomain' ),
    'items_list' => __( 'Fact list', 'textdomain' ),
    'items_list_navigation' => __( 'Fact list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Fact list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'fact', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'fact', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_fact_cpt', 0 );