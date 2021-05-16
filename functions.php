<?php
// Menus de navegacion, agregar mas utilizando el arreo
function gymfitness_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ));
}

add_action( 'init', 'gymfitness_menus');

// Scripts y Styles este codigo se utiliza para agregar librerias de js y css
function gymfitness_scripts_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style( 'slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.1');
	//la hoja de estilos principal
	wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    wp_enqueue_script( 'slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

