<?php

function jeswebdev_all_scriptsandstyles() {

    // wp_enqueue_script( 'lazy-load', get_template_directory_uri() . '/js/lazy-load.min.js');

    wp_enqueue_script('jquery');
    // wp_enqueue_script('lazy-load');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_register_style('blog_style', get_template_directory_uri() . '/css/blog.css', array(), false, true);
    wp_register_style('g_font', 'https://fonts.googleapis.com/css?family=Cinzel', array(), false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    wp_enqueue_style('blog_style');
    wp_enqueue_style('g_font');

}


add_action( 'wp_enqueue_scripts', 'jeswebdev_all_scriptsandstyles' );

// Register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');



  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support( 'post-formats', array(
      'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
  	) );
  }


add_action('after_setup_theme','wpb_theme_setup');

// Excerpt Length Control
function set_excerpt_length(){
  return 100;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  =>  'Sidebar',
    'id'    =>  'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

// Add SVG functionality

function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
