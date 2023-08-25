<?php
/**
 * 
 * Theme functions.
 * 
 * @package Kiante
 * 
 */

// Define a function to enqueue styles and scripts for the current theme
function kiante_enqueue_scripts() {
    // Enqueue the main stylesheet using wp_enqueue_style
    wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
    // Enqueue the main JavaScript file using wp_enqueue_script
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
}

// Hook kiante_enqueue_scripts to the wp_enqueue_scripts action
add_action( 'wp_enqueue_scripts', 'kiante_enqueue_scripts' );


add_theme_support('post-thumbnails');

register_nav_menus(
    array('primary-menu'=>'Top Menu')
);

register_sidebar(

array(
    'name'=>"Sidebar Location",
    'id'=>'sidebar'
)

);



?>