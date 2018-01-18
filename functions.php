<?php

require get_stylesheet_directory(). '/inc/template/shopmenus.php';
require get_stylesheet_directory(). '/inc/template/ship.php';

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'shop_setup_js_css' ) ):
    function shop_setup_js_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );

		//wp_enqueue_script('js_gatale',  get_stylesheet_directory()  . '/inc/js/gatale.js', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'shop_setup_js_css', 10 );

// Load Custom JavaScript via Child Theme
function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/inc/js/shop.js',
        array( 'jquery' )
    );
    wp_enqueue_script(
        'session-jquery-script',
        get_stylesheet_directory_uri() . '/inc/js/jquery.session.js',
        array( 'jquery' )
    );
    wp_localize_script( 'custom-script', 'screenReaderText',
        array( 
            'adminAjax' => admin_url( 'admin-ajax.php' ),
            'security' => wp_create_nonce('user-submitted-question'),
        )
    );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );



?>