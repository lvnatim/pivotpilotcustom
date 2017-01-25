<?php

function asset_pipeline(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/bootstrap/css/bootstrap.css');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_register_script( 'index', get_template_directory_uri() . '/index.js', array( 'jquery' ));
  wp_enqueue_script('index');
  wp_localize_script( 'index', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');
add_action( 'wp_enqueue_scripts', 'asset_pipeline' );

?>