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


function get_researchers($cat){
  global $post;
 
  $html = '';
            $args = array(
                      'posts_per_page' => -1,
                      'post_type'   => 'researcher', 
                      'post_status' => 'publish',

                    );
             if ($cat){  	  	
             	// array_merge($data, array("cat"=>"wagon","foo"=>"baar"));
				  	$args['tax_query'] =  array_merge(
					       array( array (
					            'taxonomy' => 'location',
					            'field' => 'slug',
					            'terms' => $cat,
					        ))
					    );
				  }
                    $the_query = new WP_Query( $args );

                    if( $the_query->have_posts() ): 
                      $html .= '<div class="row researchers">';	
                      	  $html .= '<div class="col-md-12"><h2 class="row-header">Researchers</h2></div>';	
	                      while ( $the_query->have_posts() ) : $the_query->the_post(); 
		                      $name = get_the_title();
		                      $html .= '<div class="col-md-4 researcher-square">';
		                     
		                      if(get_field('link')){
		                      	$html .= '<a href="'.get_field('link').'">';
		                      }                                              
		                     
		                      $html .= '<div class="card researcher-group"><div class="card-body">';
		                      $alt = get_the_title() . ' researcher biography picture.';
		                      //NEED TO PUT AN ELSE IN HERE FOR MISSING THUMBS
		                      $html .=  get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'img-fluid researcher-bio-pic', 'alt' => $alt) );                      
		                      $html .= '<h3 class="researcher-name">';
		                      $html .= $name;                      
		                      $html .= '</h3>';
		                      if (get_field('link')){
		                      	$html .= '</a>';
		                      }
		                      //$html .= '<div class="researcher-title">'.get_field('researcher_title').'</div>';
		                      $html .= '<div class="researcher-location">'.  get_field('researcher_site')[0]->name .'</div>';
		                      $html .= '<div class="researcher-bio">' . get_field('researcher_bio') . '</div>';
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

function get_research_sites(){
  global $post;
 
  $html = '';
            $args = array(
                      'posts_per_page' => -1,
                      'post_type'   => 'site', 
                      'post_status' => 'publish',
                      'order' => 'ASC',
                      'orderby' => 'title',
                    );
             
                    $the_query = new WP_Query( $args );

                    if( $the_query->have_posts() ): 
                      $html .= '<div class="row sites">';
                          $html .= '<div class="col-md-12"><h2 class="row-header">Sites</h2></div>';	
	                      while ( $the_query->have_posts() ) : $the_query->the_post(); 
	                      $html .= '<div class="col-md-4 site-square">';                                              
	                      $html .= '<a href="'.get_the_permalink().'">';
	                      $html .= '<div class="card site-group"><div class="card-body">';
	                      //NEED TO PUT AN ELSE IN HERE FOR MISSING THUMBS
	                      $html .=  get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'img-fluid site-pic', 'alt' => 'Site logo.') );                      
	                      $html .= '<h3 class="site-name">';
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

add_shortcode( 'show-sites', 'get_research_sites' );


function coga_get_blog_posts(){
	global $post;
		$html = '';
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                      'post_type'   => 'post', 
                      'post_status' => 'publish',
                      'order' => 'ASC',
                      'orderby' => 'date',
                      'posts_per_page' => 10,
        			  'paged' => $paged
                    );
             
                    $the_query = new WP_Query( $args );
                    global $wp_query;
					// Put default query object in a temp variable
					$tmp_query = $wp_query;
					// Now wipe it out completely
					$wp_query = null;
					// Re-populate the global with our custom query
					$wp_query = $the_query;

                    if( $the_query->have_posts() ): 
                      $html .= '<div class="row news">';
	                      while ( $the_query->have_posts() ) : $the_query->the_post(); 
		                      $html .= '<div class="col-md-12">';                                              
		                      $html .= '<a href="'.get_the_permalink().'">';
		                      $html .= '<div class="card news"><div class="card-body">';
		                      //NEED TO PUT AN ELSE IN HERE FOR MISSING THUMBS
		                      $html .=  get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'img-fluid site-pic alignleft', 'alt' => 'Decorative image.') );                      
		                      $html .= '<h2 class="news-name">';
		                      $html .=  get_the_title(); ;                      
		                      $html .= '</h2></a>';	
		                      $html .= '<p>' . get_the_excerpt() . '</p>';                      
		                      $html .= '</div>';  
		                      $html .= '</div>';                               
		                      $html .= '</div>';                               	
	                     endwhile;	                    
                     $html .= '</div>';
                     $html .= get_previous_posts_link('&laquo; Newer posts'); 
	                 $html .= get_next_posts_link('Older posts &raquo;');
	                   
                  endif;
            wp_reset_query();  // Restore global post data stomped by the_post().

  return $html;

}


//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");