<?php
// Läsa in css-filen 
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); 

// Menu: Header och Footer
function wpb_custom_new_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'post-thumbnails' );

// [citat]
function citat_shortcode( $atts, $content = null ) {
	return '<blockquote class="citat"><i>' . $content . '</i></blockquote>';
}
add_shortcode( 'citat', 'citat_shortcode' );

?>
