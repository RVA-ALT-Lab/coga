<?php
/**
 * Custom functions for all the ACF entwinements
 *
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Register Blocks
 * @link https://www.billerickson.net/building-gutenberg-block-acf/#register-block
 *
 */
function be_register_blocks() {
  
  if( ! function_exists( 'acf_register_block_type' ) )
    return;

  acf_register_block_type( array(
    'name'      => 'progression',
    'title'     => __( 'Vertical Progression', 'progression' ),
    'render_template' => '/block-templates/vertical-progression.php',
    'category'    => 'formatting',
    'icon'      => 'admin-users',
    'mode'      => 'auto',
    'keywords'    => array( 'vertical', 'progression', 'order' )
  ));

}
add_action('acf/init', 'be_register_blocks' );