<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'inspiro-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function register_hallura_styles_and_scripts() {
    if ( is_page_template( 'page_hallura_front_page.php' ) ) {
        wp_enqueue_style('hallura-bootstrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.min.css");
        
        wp_enqueue_style( 'hallura-core', get_stylesheet_directory_uri() . '/assets/css/master.css', [] );
        wp_enqueue_style( 'hallura-front-page', get_stylesheet_directory_uri() . '/hallura-front-page.css', [] );
        wp_enqueue_style( 'hallura-animate', get_stylesheet_directory_uri() . '/assets2/animate.min.css', [] );
        wp_enqueue_script( 'hallura-wow', get_stylesheet_directory_uri() . '/assets2/wow.min.js', [] );
        wp_enqueue_style( 'hallura-revolution-settings', get_stylesheet_directory_uri() . '/revolution/css/settings.css', [] );
        wp_enqueue_style( 'hallura-revolution-layers', get_stylesheet_directory_uri() . '/revolution/css/layers.css', [] );
        
        wp_enqueue_style( 'hallura-default', get_stylesheet_directory_uri() . '/assets/css/new/default.css', [] );
        wp_enqueue_style( 'hallura-style', get_stylesheet_directory_uri() . '/assets/css/new/style.css', [] );
        
        wp_enqueue_style( 'hallura-owl', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [] );
        wp_enqueue_script( 'hallura-jquery-3.6', '//code.jquery.com/jquery-3.6.0.min.js', [] );
        wp_enqueue_script( 'hallura-owl-script', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['hallura-jquery-3.6'] );
        
        # footer scripts
        // wp_enqueue_script( 'hallura-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', [], false, true );
        wp_enqueue_script( 'hallura-js', get_stylesheet_directory_uri() . '/assets2/main.js', [], false, true );
        wp_enqueue_script( 'hallura-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', [], false, true );
        wp_enqueue_script( 'hallura-smoothscroll', get_stylesheet_directory_uri() . '/assets/js/smoothscroll.js', ['hallura-jquery'], false, true );
        wp_enqueue_script( 'hallura-js-plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', ['hallura-jquery'], false, true );
        wp_enqueue_script( 'hallura-js-master', get_stylesheet_directory_uri() . '/assets/js/master.js', ['hallura-jquery'], false, true );
        wp_enqueue_script( 'hallura-kit-fontawesome', '//kit.fontawesome.com/59791f4fda.js', ['hallura-jquery'], false, true );
    }
}
add_action( 'wp_enqueue_scripts', 'register_hallura_styles_and_scripts', 1);
