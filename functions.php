<?php

  function aoh_enqueue_scripts(){
    wp_enqueue_style('aoh-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', false, null, 'all');
    wp_enqueue_style('aoh-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false, null, 'all');
    wp_enqueue_style('aoh-custom', get_template_directory_uri().'/style.css', array('aoh-bootstrap'), 'all');
    wp_enqueue_style('aoh-event', get_template_directory_uri().'/assets/event.css', array('aoh-bootstrap'), 'all');
    wp_enqueue_style('aoh-archive-hamn', get_template_directory_uri().'/assets/archive-hamn.css', array('aoh-bootstrap'), 'all');
    wp_enqueue_script('aoh-bootstrap-js', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array('jquery'), null, true);
    wp_enqueue_script('aoh-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
  }

  add_action('wp_enqueue_scripts', 'aoh_enqueue_scripts');

  function aoh_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'aoh_theme_support');

  function aoh_custom_header(){
    $args = array(        
      'default-text-color' => '000',
      'width'              => 1440,
      'height'             => 834,
      'flex-width'         => true,
      'flex-height'        => true,
    );
    add_theme_support('custom-header', $args);
  }

  add_action('after_setup_theme', 'aoh_custom_header');

  function aoh_menus(){
    $locations = array(
      'primary' => 'topmenu',
      'footer' => 'footer-items',
    );
    register_nav_menus($locations);
  }

  add_action('init', 'aoh_menus');

  function aoh_event_widget_area(){
    register_sidebar(
      array(
        'before-title' => '<h4>',
        'after-title' => '</h4>',
        'before-widget' => '',
        'after-widget' => '',
        'name' => 'Start Page Event Area',
        'id' => 'start-page-event-box',
        'description' => 'Add event widget here'
      )
    );
  }

  function aoh_footer_widget_area(){
    register_sidebar(
      array(
        'before-title' => '<h4>',
        'after-title' => '</h4>',
        'before-widget' => '',
        'after-widget' => '',
        'name' => 'Footer Widget Area',
        'id' => 'footer-widget-area',
        'description' => 'Add footer widget here'
      )
    );
  }

  add_action('widgets_init', 'aoh_event_widget_area');
  add_action('widgets_init', 'aoh_footer_widget_area');

  function aoh_create_post_type_dock(){
    register_post_type('hamn', 
      array(
        'labels' => array(
          'name' => __('Hamnar'),
          'singular_name' => __('Hamn')
        ),
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'author',
          'thumbnail',
          'comments',
          'revisions',
          'custom-fields'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 1,
        'menu_icon' => 'dashicons-palmtree',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true
      )
    );
  }

  add_action('init', 'aoh_create_post_type_dock');



  function template_chooser( $template ){
    global $wp_query;   
    $post_type = get_query_var('post_type');   
    if( $wp_query->is_search && $post_type == 'hamn' ){
        return locate_template('archive-hamn.php');  //  redirect to archive-search.php
    }   
    return $template;   
}
add_filter( 'template_include', 'template_chooser' ); 

?>