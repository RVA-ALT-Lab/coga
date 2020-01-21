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

if (is_plugin_active( 'advanced-custom-fields-pro/acf.php'))  {
 
 //ACF JSON SAVER
  add_filter('acf/settings/save_json', 'coga_json_save_point');
   
  function coga_json_save_point( $path ) {
      
      // update path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $path;
      
  }

  //ACF JSON LOADER
  add_filter('acf/settings/load_json', 'coga_acf_json_load_point');

  function coga_acf_json_load_point( $paths ) {
      
      // remove original path (optional)
      unset($paths[0]);    
      
      // append path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $paths;
      
  }

  function home_intro_text(){
    $intro_text = get_field('intro_text');
    echo $intro_text;
  }



function home_nav_menu (){
  if( have_rows('main_navigation_menu') ):

  // loop through the rows of data
    while ( have_rows('main_navigation_menu') ) : the_row();
        echo '<div class="col-md-4 nav-button">';
        echo '<a href="' . get_sub_field('nav_url') . '">' ;       
        echo '<h2>' . get_sub_field('nav_title') . '</h2></a>';
        echo '</div>';
    endwhile;

    else :

        // no rows found

    endif;
  }

  function home_info_panels(){
     if( have_rows('home_info_panels') ):

  // loop through the rows of data
    while ( have_rows('home_info_panels') ) : the_row();
        $slug_title = sanitize_title(get_sub_field('info_title'));
        echo '<div class="col-md-6"><div class="list-box">';
        echo '<h2 id="' . $slug_title . '">' . get_sub_field('info_title') . '</h2>';
        echo get_sub_field('info_text');
        echo '</div></div>';
    endwhile;

    else :

        // no rows found

    endif;
    
  }

function home_news(){
  $cat_id = get_field('home_news');
  $args = array(
    'cat' => $cat_id,
    'posts_per_page' => 3,
    );
  $the_query = new WP_Query( $args );
 

  if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
      // Do Stuff
      echo '<div class="news-item"><a href="#"><h3 class="news-title">'.get_the_title() . '</h3></a>';
      echo get_the_excerpt() . '</div>';

    endwhile;
  endif;
  // Reset Post Data
  wp_reset_postdata();
}

  //END check for ACF
 
}