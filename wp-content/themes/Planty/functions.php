<?php   

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Ajouter une autre feuille de style (exemple : du css compilé)
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
}

