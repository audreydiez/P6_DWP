<?php   

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles(){
    

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');  
    wp_enqueue_script('custom_contact_input', get_stylesheet_directory_uri() . '/assets/js/contact.js', array('jquery'), '1.0.0', true );
    // Ajouter une autre feuille de style (exemple : du css compilé)
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
    
}

// Test ajout class dans le menu puis target a dans css
function add_menu_class($classes, $item, $args)
{
    if ($args->theme_location == 'primary') {
        $classes[] = 'planty_p-nav_li';
      }
    
    return $classes;
}

function add_menu_link_class($attrs)
{
    $attrs['class'] = 'planty_p-nav_a';
    return $attrs;
}


//add_filter('nav_menu_css_class', 'add_menu_class', 10, 3);
//add_filter('nav_menu_link_attributes', 'add_menu_link_class');

//Ajout class body
function add_body_class($classes) {
    $classes[] = 'planty_body';
    return $classes;
}

add_filter('body_class', 'add_body_class');

/* add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, array( 'class-name' ) );
} ); */


register_nav_menus( array(
    'footer_custom' => __( 'Footer Custom', 'Planty' ),
) );



// Remove span in contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});