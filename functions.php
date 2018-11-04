<?php

function jeswebdev_all_scriptsandstyles() {

    wp_register_script( 'jquery-2', get_template_directory_uri() . '/js/jquery.js' );
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/script.js' );

    wp_enqueue_script('jquery-2', $in_footer = true );
    wp_enqueue_script( 'custom-script', $in_footer = true);


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    // wp_register_style('blog_style', get_template_directory_uri() . '/css/blog.css', array(), false, true);
    wp_register_style('g_font', 'https://fonts.googleapis.com/css?family=Cinzel', array(), false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    // wp_enqueue_style('blog_style');
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

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Portfolios', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Portfolios', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'twentythirteen' ),
        'all_items'           => __( 'All Portfolios', 'twentythirteen' ),
        'view_item'           => __( 'View Portfolio', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Portfolio', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Portfolio', 'twentythirteen' ),
        'update_item'         => __( 'Update Portfolio', 'twentythirteen' ),
        'search_items'        => __( 'Search Portfolio', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'portfolios', 'twentythirteen' ),
        'description'         => __( 'Portfolio news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'portfolios', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
