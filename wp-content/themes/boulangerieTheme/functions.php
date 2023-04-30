<?php

// importation du fichier css
function boulangerie_style() {
    wp_enqueue_style( 'boulangerieThemeCss', get_template_directory_uri().'/assets/css/main.css', '', false, 'all');
    wp_enqueue_style( 'fontAwsome4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', '', false, 'all');
    wp_enqueue_style( 'boulangerieFontfamily', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap');
}
add_action( 'wp_enqueue_scripts', 'boulangerie_style' );


// importation du fichier js
function boulangerie_script() {
    wp_enqueue_script( 'boulangerieThemeJs', get_template_directory_uri().'/assets/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'boulangerie_script' );

// création de la sidebar
function boulangerie_sidebar() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'init', 'boulangerie_sidebar');

// création de menu
function boulangerie_menu() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
}
add_action( 'init', 'boulangerie_menu' );


// activation de la fonctionnalité image mise en avant
add_theme_support( 'post-thumbnails' );


// activation de l'importation du logo
add_theme_support('custom-logo');


// activation des widgets
add_theme_support('widgets');


function boulangerie_custom_excerpt($length) {
    return 30;
} 
add_filter( 'excerpt_length', 'boulangerie_custom_excerpt');




