<?php
/**
 * Bizlight functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bizlight
 */
/**
 * Get the path for the file ( to support child theme )
 *
 * @since Bizlight 1.0.0
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('bizlight_file_directory') ){
	function bizlight_file_directory( $file_path ){
		$located = locate_template( $file_path );
		if( '' != $located ){
			return $located;
		}
	}
}
/**
 * require bizlight int.
 */

$bizlight_init_file_path = bizlight_file_directory('inc/init.php');
require $bizlight_init_file_path;

if ( ! function_exists( 'bizlight_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bizlight_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bizlight, use a find and replace
	 * to change 'bizlight' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bizlight', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_image_size/
	 */
	add_image_size( 'home-main-slider', 1361 ,533, true );
	add_image_size( 'home-blog-post-thumbnails-image', 365, 247, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bizlight' ),
		'social' => esc_html__( 'Social Menu', 'bizlight' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bizlight_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

}
endif; // bizlight_setup
add_action( 'after_setup_theme', 'bizlight_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bizlight_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizlight_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizlight_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function bizlight_scripts() {

	global $bizlight_customizer_all_values;

	/*Bootstrap css*/
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/frameworks/bootstrap/css/bootstrap.css', array(), '3.3.4' );/*added*/

	/*google font*/
	$bizlight_font_family_h1_h6 = $bizlight_customizer_all_values['bizlight-font-family-h1-h6'];
	$bizlight_font_family_site_identity = $bizlight_customizer_all_values['bizlight-font-family-site-identity'];

	if( $bizlight_font_family_h1_h6 == $bizlight_font_family_site_identity ){
		wp_enqueue_style( 'bizlight-googleapis', '//fonts.googleapis.com/css?family='.$bizlight_font_family_h1_h6.'', array(), '' );/*added*/
	}
	else{
		wp_enqueue_style( 'bizlight-googleapis-heading', '//fonts.googleapis.com/css?family='.$bizlight_font_family_h1_h6.'', array(), '' );/*added*/
		wp_enqueue_style( 'bizlight-googleapis-site-identity', '//fonts.googleapis.com/css?family='.$bizlight_font_family_site_identity.'', array(), '' );/*added*/
	}
	wp_enqueue_style( 'bizlight-googleapis-other-font-family', '//fonts.googleapis.com/css?family=Raleway', array(), '' );/*added*/
	/*Font-Awesome-master*/
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/frameworks/Font-Awesome/css/font-awesome.min.css', array(), '4.4.0' );/*added*/

    /*bxslider css*/
    wp_enqueue_style( 'jquery-bxslider', get_template_directory_uri() . '/assets/frameworks/bxslider/css/jquery.bxslider.css', array(), '4.0' );/*added*/

	/*animate css*/
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/frameworks/wow/css/animate.min.css', array(), '3.4.0' );/*added*/
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/frameworks/wow/js/wow.min.js', array('jquery'), '1.1.2', 1);

	/*main style*/
    wp_enqueue_style( 'bizlight-style', get_stylesheet_uri() );

    /*jquery start*/
	wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/frameworks/jquery.easing/jquery.easing.js', array('jquery'), '0.3.6', 1);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/frameworks/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.5', 1);
	wp_enqueue_script('jquery-bxslider', get_template_directory_uri() . '/assets/frameworks/bxslider/js/jquery.bxslider.js', array('jquery'), '4.0', 1);

    wp_enqueue_script( 'bizlight-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) && !(is_front_page()) ) {
        wp_enqueue_script( 'comment-reply' );
    }

	/*custom js*/
	wp_enqueue_script('bizlight-custom', get_template_directory_uri() . '/assets/js/bizlight-custom.js', array('jquery'), '1.0.0', 1);
	// Load the html5 shiv and respond js.
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/assets/frameworks/html5shiv/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', get_template_directory_uri() . '/assets/frameworks/respond/respond.min.js', array(), '1.4.2' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'bizlight_scripts' );

/**
 * Custom template tags for this theme.
 */
$bizlight_template_tags = bizlight_file_directory('inc/template-tags.php');
require $bizlight_template_tags;

/**
 * Custom functions that act independently of the theme templates.
 */
$bizlight_extras_tags = bizlight_file_directory('inc/extras.php');
require $bizlight_extras_tags;

/**
 * Load Jetpack compatibility file.
 */
$bizlight_jetpack_tags = bizlight_file_directory('inc/jetpack.php');
require $bizlight_jetpack_tags;