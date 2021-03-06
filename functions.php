<?php
/**
 * Impero Media 2015 functions and definitions
 *
 * @package Impero Media 2015
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'imperomedia15_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function imperomedia15_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Impero Media 2015, use a find and replace
	 * to change 'imperomedia15' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'imperomedia15', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'imperomedia15' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'imperomedia15_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // imperomedia15_setup
add_action( 'after_setup_theme', 'imperomedia15_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function imperomedia15_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'imperomedia15' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'imperomedia15_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
// deregister default jQuery included with Wordpress
wp_deregister_script( 'jquery' );
$jquery_cdn = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
wp_enqueue_script( 'jquery', $jquery_cdn, array(), '20130115', true );

/*******************************************
REGISTER AND ENQUEUE ALL JS AND CSS FOR SITE
*******************************************/

function imperomedia15_scripts() {

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

// REGISTER JS
    wp_register_script('imperomedia15-navigation', get_template_directory_uri() . '/js/navigation.js');
    wp_register_script('imperomedia15-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js');
    wp_register_script('sticky-menu', get_template_directory_uri() . '/js/sticky_menu.js');
    wp_register_script('strip-js', get_template_directory_uri() . '/js/strip.pkgd.min.js');
    wp_register_script('jq-fittext', get_template_directory_uri() . '/js/jquery.fittext.js');
    wp_register_script('typekit-script', '//use.typekit.net/aam6vuu.js');

//REGISTER CSS
    wp_register_style('cloud-typography', '//cloud.typography.com/7132154/676568/css/fonts.css');
    wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_register_style('animate', get_stylesheet_directory_uri().'/css/animate.min.css');
    wp_register_style('strip-css', get_stylesheet_directory_uri().'/css/strip.css');

//  ENQUEUE EXTERNAL SCRIPT
//  wp_enqueue_script( 'script-slug', '//domain.com/path/to/script.js');
//  ENQUEUE INTERNAL SCRIPT
//  wp_enqueue_script( 'script-slug', get_template_directory_uri() . '/js/script.js');

//ENQUEUE JS
    wp_enqueue_script('imperomedia15-navigation');
    wp_enqueue_script('imperomedia15-skip-link-focus-fix');
    wp_enqueue_script('sticky-menu');
    wp_enqueue_script('strip-js');
    wp_enqueue_script('jq-fittext');
    wp_enqueue_script('typekit-script');
//ENQUEUE CSS
    wp_enqueue_style('cloud-typography');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('animate');
    wp_enqueue_style('strip-css'); 
}

    wp_enqueue_style( 'imperomedia15-style', get_stylesheet_uri() );

    add_action( 'wp_enqueue_scripts', 'imperomedia15_scripts' );
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';