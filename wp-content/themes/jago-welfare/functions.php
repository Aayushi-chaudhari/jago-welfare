<?php
/**
 * jago-welfare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jago-welfare
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jago_welfare_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on jago-welfare, use a find and replace
		* to change 'jago-welfare' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jago-welfare', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'jago-welfare' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'jago_welfare_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'jago_welfare_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jago_welfare_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jago_welfare_content_width', 640 );
}
add_action( 'after_setup_theme', 'jago_welfare_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jago_welfare_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jago-welfare' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jago-welfare' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jago_welfare_widgets_init' );

// function register_homepage_sidebar() {
// 	register_sidebar( array(
// 	   'name'          => __( 'Homepage Sidebar', 'your-theme-textdomain' ),
// 	   'id'            => 'homepage-sidebar',
// 	   'description'   => __( 'Sidebar displayed on the homepage.', 'your-theme-textdomain' ),
// 	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 	   'after_widget'  => '</div>',
// 	   'before_title'  => '<h3 class="widget-title">',
// 	   'after_title'   => '</h3>',
// 	) );
//  }
//  add_action( 'widgets_init', 'register_homepage_sidebar' );
 



function jago_welfare_scripts() {
	wp_enqueue_style( 'jago-welfare-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'jago-welfare-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jago-welfare-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jago_welfare_scripts' );


function enqueue_custom_styles() {
   
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

	acf_add_options_sub_page(array(
        'page_title'    => 'Theme Common Settings',
        'menu_title'    => 'Common',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}



add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles_last',95 );
function enqueue_parent_styles_last() {
   wp_enqueue_style( 'animate-style', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all' );	
   wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'fontawesome-style', get_stylesheet_directory_uri() . '/assets/css/fontawesome.all.min.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'magnific-style', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'meanmenu-style', get_stylesheet_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'navber-style', get_stylesheet_directory_uri() . '/assets/css/navber.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'theme-default-style', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'style-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
};

function enqueue_custom_script() {
	wp_enqueue_script( 'bundle-js', get_stylesheet_directory_uri().'/assets/js/bootstrap.bundle.js', array(), '', true);
	wp_enqueue_script( 'progress-js', get_stylesheet_directory_uri().'/assets/js/custom-progress-bar.js', array(), '', true);
	wp_enqueue_script( 'scroll-js', get_stylesheet_directory_uri().'/assets/js/custom-scroll-count.js', array(), '', true);
	wp_enqueue_script( 'slider-js', get_stylesheet_directory_uri().'/assets/js/custom-slider.js', array(), '', true);
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri().'/assets/js/custom.js', array(), '', true);
	wp_enqueue_script( 'customizer-js', get_stylesheet_directory_uri().'/assets/js/customizer.js', array(), '', true);
	wp_enqueue_script( 'gallery-js', get_stylesheet_directory_uri().'/assets/js/gallery-popup.js', array(), '', true);
	wp_enqueue_script( 'counterup-js', get_stylesheet_directory_uri().'/assets/js/jquery.counterup.min.js', array(), '', true);
	wp_enqueue_script( 'magnific-js', get_stylesheet_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), '', true);
	wp_enqueue_script( 'meanmenu-js', get_stylesheet_directory_uri() .'/assets/js/jquery.meanmenu.js', array(), '', true);
	wp_enqueue_script( 'jquery-js', get_stylesheet_directory_uri() .'/assets/js/jquery.min.js', array(), '', true);
	wp_enqueue_script( 'navigation-js', get_stylesheet_directory_uri() .'/assets/js/navigation.js', array(), '', true);
	wp_enqueue_script( 'carousel-js', get_stylesheet_directory_uri() .'/assets/js/owl.carousel.min.js', array(), '', true);
	wp_enqueue_script( 'video-js', get_stylesheet_directory_uri() .'/assets/js/video.js', array(), '', true);
	wp_enqueue_script( 'waypoints-js', get_stylesheet_directory_uri() .'/assets/js/waypoints.min.js', array(), '', true);
	wp_enqueue_script( 'wow-js', get_stylesheet_directory_uri() .'/assets/js/wow.min.js', array(), '', true);
	wp_enqueue_script( 'accordion-js', get_stylesheet_directory_uri() .'/assets/js/accordion.js', array(), '', true);
	wp_enqueue_script( 'image-js', get_stylesheet_directory_uri() .'/assets/js/custom-image-slider.js', array(), '', true);
	wp_enqueue_script( 'counter-js', get_stylesheet_directory_uri() .'/assets/js/counter.js', array(), '', true);


}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_script' );

function enqueue_custom_scripts() {

	 // Enqueue your custom JavaScript file
	 wp_enqueue_script('custom-bar-script', get_template_directory_uri() . '/assets/js/custom-bar.js', array('jquery'), '1.0', true);

	 // Pass the target value to your JavaScript file
	 wp_localize_script('custom-bar-script', 'progressTarget', array(
		 'target' => 50 // Replace 100 with your desired target value
	 ));

    // Enqueue Slick Slider CSS
    wp_enqueue_style( 'slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all' );

    // Enqueue Slick Slider JavaScript
    wp_enqueue_script( 'slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '1.8.1', true );

    // Enqueue your custom script that initializes the slider
    wp_enqueue_script( 'custom-slider', get_template_directory_uri() . '/assets/js/custom-slider.js', array( 'jquery', 'slick-slider' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );


require_once('custom-widget.php');


function custom_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Detail Images',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'detail-images'),
    );
    register_post_type('detail_images', $args);
}
add_action('init', 'custom_post_type');



class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Override start_el method
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Call parent method
        parent::start_el($output, $item, $depth, $args, $id);

        // Check if menu item is for the gallery
        if ($item->title == 'Gallery') {
            // Get the image count
            $image_count = get_gallery_image_count();

            // Append the image count to the menu item
            $output .= '<span class="image-count">(' . $image_count . ' images)</span>';
        }
    }
}

// Function to get the image count from the gallery page
function get_gallery_image_count() {
    $gallery_page_id = get_page_by_title('Gallery')->ID; // Get the ID of the gallery page
    $image_count = 0;
    if (have_rows('gallery_grid', $gallery_page_id)) {
        while (have_rows('gallery_grid', $gallery_page_id)) {
            the_row();
            $image_count++;
        }
    }
    return $image_count;
}


