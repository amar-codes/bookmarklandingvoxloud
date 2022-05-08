<?php
function multipleCssFile(){
    wp_enqueue_style("voxloudmain",get_template_directory_uri(). '/'. 'style.css?v=' . rand());
}
add_action('wp_enqueue_scripts', 'multipleCssFile');

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

function wpb_custom_new_menu() {
    register_nav_menu('menus',__( 'menus' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );
?>