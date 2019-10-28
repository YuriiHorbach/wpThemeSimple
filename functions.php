<?php
/**
* Functions for the Simple Theme
*/

//not give to call this file from outside

if(! defined('ABSPATH')){
		return;
}

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 1200; /* pixels */

add_action('wp_equeue_scrips','st_enqueue_scripts_styles');


/**
*Enqueueing
* @return void
*/

//add styles
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'st-style', get_stylesheet_uri() );
}

/**
 * Simple Theme Setup
 * @return void
 */

if ( ! function_exists( 'st_setup' ) ) :

	function st_setup() {

		 /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
		load_theme_textdomain( 'st', get_template_directory() . '/languages' );

		/**
     * Add default posts and comments RSS feed links to <head>.
     */
		add_theme_support( 'post-thumbnails' );

		/**
     * Title
     */
		add_theme_support( 'title-tag' );

		$html5_args = array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		);

		/**
     * HTML5
     */
		add_theme_support( 'html5', $html5_args );

		/**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'st' ),
        'footer'  => __('Footer Menu', 'st' )
    ) );

	}

endif;

add_action( 'after_setup_theme', 'st_setup' );

//add widgets

add_action( 'widgets_init', 'st_register_sidebars' );
function st_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'footer1',
            'name'          => __( 'Footer Sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}