<?php
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/styles.css', '1.0.2');

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.2' );
}