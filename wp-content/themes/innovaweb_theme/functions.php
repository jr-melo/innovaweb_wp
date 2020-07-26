   
<?php 

function load_stylesheets(){
  
    wp_register_style('bootstrap_stylesheet',get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',array(),false,"all");
    wp_register_style('template_stylesheet',get_stylesheet_directory_uri() . '/css/modern-business.css',array(),false,"all");
    wp_register_style('extern_stylesheet',get_stylesheet_directory_uri() . '/css/mainstyle.css',array(),false,"all");
    wp_register_style('vendor',get_stylesheet_directory_uri() . '/vendor',array(),false,"all");

    wp_enqueue_style('bootstrap_stylesheet');
    wp_enqueue_style('template_stylesheet');
    wp_enqueue_style('extern_stylesheet');
    wp_enqueue_style('vendor');
    wp_enqueue_style('google_fonts','//fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
}

add_action("wp_enqueue_scripts", "load_stylesheets");

function aditional_features(){

    register_nav_menu('headerMenuLocation','Header Menu Location');

}

add_action("after_setup_theme","aditional_features");

