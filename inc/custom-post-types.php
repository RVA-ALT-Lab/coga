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
    'menu_name' => __( 'Facts', 'textdomain' ),
    'name_admin_bar' => __( 'Facts', 'textdomain' ),
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
    'taxonomies' => array('category'),
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
    'menu_icon' => 'dashicons-lightbulb',
  );
  register_post_type( 'fact', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_fact_cpt', 0 );


//researcher custom post type

// Register Custom Post Type researcher
// Post Type Key: researcher

function create_researcher_cpt() {

  $labels = array(
    'name' => __( 'Researchers', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Researcher', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Researcher', 'textdomain' ),
    'name_admin_bar' => __( 'Researcher', 'textdomain' ),
    'archives' => __( 'Researcher Archives', 'textdomain' ),
    'attributes' => __( 'Researcher Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Researcher:', 'textdomain' ),
    'all_items' => __( 'All Researchers', 'textdomain' ),
    'add_new_item' => __( 'Add New Researcher', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Researcher', 'textdomain' ),
    'edit_item' => __( 'Edit Researcher', 'textdomain' ),
    'update_item' => __( 'Update Researcher', 'textdomain' ),
    'view_item' => __( 'View Researcher', 'textdomain' ),
    'view_items' => __( 'View Researchers', 'textdomain' ),
    'search_items' => __( 'Search Researchers', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into researcher', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this researcher', 'textdomain' ),
    'items_list' => __( 'Researcher list', 'textdomain' ),
    'items_list_navigation' => __( 'Researcher list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Researcher list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'researcher', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category','tag'),
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
  register_post_type( 'researcher', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_researcher_cpt', 0 );


//site custom post type

// Register Custom Post Type site
// Post Type Key: site

function create_site_cpt() {

  $labels = array(
    'name' => __( 'Sites', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Site', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Site', 'textdomain' ),
    'name_admin_bar' => __( 'Site', 'textdomain' ),
    'archives' => __( 'Site Archives', 'textdomain' ),
    'attributes' => __( 'Site Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Site:', 'textdomain' ),
    'all_items' => __( 'All Sites', 'textdomain' ),
    'add_new_item' => __( 'Add New Site', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Site', 'textdomain' ),
    'edit_item' => __( 'Edit Site', 'textdomain' ),
    'update_item' => __( 'Update Site', 'textdomain' ),
    'view_item' => __( 'View Site', 'textdomain' ),
    'view_items' => __( 'View Sites', 'textdomain' ),
    'search_items' => __( 'Search Sites', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into site', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this site', 'textdomain' ),
    'items_list' => __( 'Site list', 'textdomain' ),
    'items_list_navigation' => __( 'Site list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Site list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'site', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category'),
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
  register_post_type( 'site', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_site_cpt', 0 );


/// Register Custom Taxonomy
function coga_sites_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Sites', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Site', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Site', 'text_domain' ),
        'all_items'                  => __( 'Sites', 'text_domain' ),
        'parent_item'                => __( 'Site', 'text_domain' ),
        'parent_item_colon'          => __( 'Site:', 'text_domain' ),
        'new_item_name'              => __( 'New Site', 'text_domain' ),
        'add_new_item'               => __( 'Add New Site', 'text_domain' ),
        'edit_item'                  => __( 'Edit Site', 'text_domain' ),
        'update_item'                => __( 'Update Site', 'text_domain' ),
        'view_item'                  => __( 'View Site', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate sites with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove sites', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Sites', 'text_domain' ),
        'search_items'               => __( 'Search Sites', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No Sites', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
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
    register_taxonomy( 'site', array( 'post', 'researcher' ), $args );

}
add_action( 'init', 'coga_sites_taxonomy', 0 );