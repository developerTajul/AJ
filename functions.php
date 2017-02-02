<?php
/**
 * AJ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AJ
 */

if ( ! function_exists( 'aj_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aj_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on AJ, use a find and replace
	 * to change 'aj' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'aj', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'aj' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aj_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


	


	/** 
	*
	*
	* custom post type
	*
	*
	*/

	// testimonials
	register_post_type('aj_testimonials', array(
		'label'	=> 'Testimonials',
		'labels'		=> array(
				'name'	=> 'Testimonials',
				'add_new'	=> 'Add New Testimonial',
				'add_new_item'	=> 'Add New Testimonial'
			),
		'public'	=> true,
		'menu_icon'	=> 'dashicons-money',
		'supports'	=> array('title', 'editor')		
	));


	// portfolios
	register_post_type('aj_portfolios', array(
		'label'	=> 'Portfolios',
		'labels'		=> array(
				'name'	=> 'Portfolios',
				'add_new'	=> 'Add New Portfolio',
				'add_new_item'	=> 'Add New Portfolio'
			),
		'public'	=> true,
		'menu_icon'	=> 'dashicons-schedule',
		'supports'	=> array('title', 'thumbnail')		
	));

	register_taxonomy('aj_portfolios_cat', 'aj_portfolios', array(
		'label'	=> 'Brands',
		'labels'	=> array(
				'name'	=> 'Brands',
				'add_new'	=> 'Add New Brand',
				'add_new_item'	=> 'Add New Brand',

			),
		'public'	=> true,
		'hierarchical' => true
	));





}
endif;
add_action( 'after_setup_theme', 'aj_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aj_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aj_content_width', 640 );
}
add_action( 'after_setup_theme', 'aj_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aj_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aj' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aj' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aj_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aj_scripts() {

	wp_enqueue_style( 'aj-montserrat', get_template_directory_uri() . '/css/montserrat.css', array(), '1.0.1', 'all' );

	wp_enqueue_style( 'aj-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.2', 'all' );

	wp_enqueue_style( 'aj-eleganticons', get_template_directory_uri() . '/css/eleganticons.min.css', array(), '1.0.3', 'all' );

	wp_enqueue_style( 'aj-plugins', get_template_directory_uri() . '/css/plugins.css', array(), '1.0.3', 'all' );

	wp_enqueue_style( 'aj-style', get_stylesheet_uri() );




	wp_enqueue_script( 'aj-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '2.0.1', false );


	wp_enqueue_script( 'aj-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '2.0.1', true );

	wp_enqueue_script( 'aj-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '2.0.2', true );

	wp_enqueue_script( 'aj-ajax-mail', get_template_directory_uri() . '/js/ajax-mail.js', array('jquery'), '2.0.3', true );

	wp_enqueue_script( 'aj-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI', array('jquery'), '2.0.4', true );

	wp_enqueue_script( 'aj-map', get_template_directory_uri() . '/js/map.js', array('jquery'), '2.0.5', true );

	wp_enqueue_script( 'aj-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '2.0.6', true );

	wp_enqueue_script( 'aj-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'aj-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aj_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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



/**
*
* Shortcode
*
*/
require get_template_directory() . '/inc/aj-shortcodes.php';


/**
*
* Redux Framework
*/
require_once('libs/redux/ReduxCore/framework.php');

require_once('libs/redux/sample/mt-redux.php');


/**
*
*
* Metabox
*
*/
require_once('libs/metabox/init.php');
// require_once('libs/metabox/example-functions.php');
require_once('libs/metabox/custom-metabox.php');




/**
*
*
*
*
*/

 require_once('libs/mce-button/mce-functions.php');