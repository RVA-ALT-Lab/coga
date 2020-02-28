<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/acf-specific.php',                          // Load ACF functions	
	'/custom-post-types.php',                          // Load ACF functions	
	'/guten-blocks.php',                          // Load Gutenberg blocks
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}


function get_researcher_generic($field_name){
	if(get_field($field_name)){
		return get_field($field_name);
	}
}


function get_researchers(){
  global $post;
  $html = '';
            $args = array(
                      'posts_per_page' => -1,
                      'post_type'   => 'researcher', 
                      'post_status' => 'publish',
                      // 'category_name' => $cat,
                    );
        
                    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      $html .= '<div class="row">';	
	                      while ( $the_query->have_posts() ) : $the_query->the_post(); 
	                      $html .= '<div class="col-md-4 researcher-square">';                                              
	                      $html .= '<a href="'.get_the_permalink().'">';
	                      $html .= '<div class="card researcher-group"><div class="card-body">';
	                      $html .=  get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'img-fluid','researcher-bio-pic', 'alt' => 'Researcher biography picture.') );                      
	                      $html .= '<h3 class="researcher-title">';
	                      $html .=  get_the_title(); ;                      
	                      $html .= '</h3></a>';
	                      $html .= '</div>';  
	                      $html .= '</div>';                               
	                      $html .= '</div>';                               	
	                     endwhile;
                     $html .= '</div>';
                  endif;
            wp_reset_query();  // Restore global post data stomped by the_post().

  return $html;
}

add_shortcode( 'show-researchers', 'get_researchers' );
