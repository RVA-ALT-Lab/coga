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

}