<?php

function register_custom_clients_and_taxonomies(){
  add_theme_support( 'post-thumbnails' );
  $labels = array(
    'name'          =>  'Clients',
    'singular_name' =>  'Client',
    'add_new'       =>  _x('Add New Client', 'Client'),
    'add_new_item'  =>  'Add Client',
    'edit_item'     =>  'Edit Client',
    'new_item'      =>  'New Client',
    'view_item'     =>  'View Client',
    'search_items'  =>  'Search Portfolio',
    'not_found'     =>  'No Clients Found',
    'not_found_in_trash' => 'No Clients found in Trash',
    'all_items'     =>  'View All Clients',
    'archives'      =>  'Portfolio',
    'insert_into_item'  =>  'Insert Into Client\'s Portfolio',
    'uploaded_to_this_item' => 'Uploaded to this Client\'s Portfolio',
    'menu_name'     =>  'Portfolio',
    'name_admin_bar'=>  'Portfolio'
  );

  register_post_type('clients',
    array(
      'description' => 'Portfolio for all the website work',
      'has_archive' => false,
      'labels'      => $labels,
      'menu_position' => 2,
      'public'      => true,
      'publicly_queryable' =>true,
      'rewrite'     => array(
        'slug'      => 'portfolio'
        ),
      'supports'    => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        ),
      'show_ui'     => true,
      'taxonomies'  => array('post_tag')
    )
  );

  $labels = array(
    'name'              => _x( 'Industries', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Industry', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Search Industries', 'textdomain' ),
    'all_items'         => __( 'All Industries', 'textdomain' ),
    'parent_item'       => __( 'Parent Industry', 'textdomain' ),
    'parent_item_colon' => __( 'Parent Industry:', 'textdomain' ),
    'edit_item'         => __( 'Edit Industry', 'textdomain' ),
    'update_item'       => __( 'Update Industry', 'textdomain' ),
    'add_new_item'      => __( 'Add New Industry', 'textdomain' ),
    'new_item_name'     => __( 'New Industry Name', 'textdomain' ),
    'menu_name'         => __( 'Industries', 'textdomain' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'industries' ),
  );

  register_taxonomy( 'industries', array( 'clients' ), $args );

  $labels = array(
    'name'              => _x( 'Services', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Service', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Search Services', 'textdomain' ),
    'all_items'         => __( 'All Services', 'textdomain' ),
    'parent_item'       => __( 'Parent Service', 'textdomain' ),
    'parent_item_colon' => __( 'Parent Service:', 'textdomain' ),
    'edit_item'         => __( 'Edit Service', 'textdomain' ),
    'update_item'       => __( 'Update Service', 'textdomain' ),
    'add_new_item'      => __( 'Add New Service', 'textdomain' ),
    'new_item_name'     => __( 'New Service Name', 'textdomain' ),
    'menu_name'         => __( 'Services', 'textdomain' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'services' ),
  );

  register_taxonomy( 'services', array( 'clients' ), $args );
}

function asset_pipeline(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/bootstrap/css/bootstrap.css');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_register_script('index', get_template_directory_uri() . '/index.js', array( 'jquery' ));
  wp_register_script('filter', get_template_directory_uri() . '/dist/js/filter.js', array( 'jquery' ));
  wp_register_script('showcase', get_template_directory_uri() . '/dist/js/showcase.js', array('jquery'));
  wp_register_script('landing', get_template_directory_uri() . '/dist/js/landing.js', array('jquery'));
  wp_register_script('gradient', get_template_directory_uri() . '/dist/js/gradient.js', array('jquery'));
  wp_enqueue_script('index');
  wp_enqueue_script('filter');
  wp_enqueue_script('showcase');
  wp_enqueue_script('landing');
  if(is_page( 'blog' )){ 
    wp_enqueue_script('gradient'); 
  }
  wp_localize_script( 'index', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

function filter(){
  $template = get_template_part( 'partials/filter', 'filter');
  echo $template;
  die();
}

add_action('init', 'register_custom_clients_and_taxonomies');
add_action('get_header', 'remove_admin_login_header');
add_action( 'wp_enqueue_scripts', 'asset_pipeline' );
add_action( 'wp_ajax_filter', 'filter');
add_action( 'wp_ajax_nopriv_filter', 'filter');

?>