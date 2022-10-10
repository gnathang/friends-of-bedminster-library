<?php
/**
 * Friends of Bedminster Library functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Friends_of_Bedminster_Library
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
function friends_of_bedminster_library_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Friends of Bedminster Library, use a find and replace
		* to change 'friends-of-bedminster-library' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'friends-of-bedminster-library', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'friends-of-bedminster-library' ),
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
			'friends_of_bedminster_library_custom_background_args',
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
add_action( 'after_setup_theme', 'friends_of_bedminster_library_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function friends_of_bedminster_library_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'friends_of_bedminster_library_content_width', 640 );
}
add_action( 'after_setup_theme', 'friends_of_bedminster_library_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function friends_of_bedminster_library_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'friends-of-bedminster-library' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'friends-of-bedminster-library' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'friends_of_bedminster_library_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


 
function friends_of_bedminster_library_scripts() {
	wp_enqueue_style( 'friends-of-bedminster-library-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'friends-of-bedminster-library-style', 'rtl', 'replace' );
 
	wp_enqueue_script( 'fob-library-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );

	wp_enqueue_style('friends-of-bedminser-library-custom', get_template_directory_uri() . '/css/custom.css' ) ;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'friends_of_bedminster_library_scripts' );


// function custom_javascript() {

//   wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', true );
// }
// add_action( 'wp_enqueue_scripts', 'custom_javascript' );

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


// Create events custom post type

function create_posttype() {
  register_post_type( 'events',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'events'),
			'supports' => array('title','author','thumbnail')
    )
  );

	register_post_type( 'welcome-section',
		array(
			'labels' => array(
				'name' => __( 'Welcome Section' ),
				'singular_name' => __( 'Welcome Section' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'welcome-section'),
			'supports' => array('title','author','thumbnail')
		)
	);

	register_post_type( 'sections',
		array(
			'labels' => array(
				'name' => __( 'Sections' ),
				'singular_name' => __( 'Section' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'section'),
			'supports' => array('title','author','thumbnail')
		)
	);

}
add_action( 'init', 'create_posttype' );


// create hero iamge.
function background ($hero_image) {
	// we pass in our image field and 
	// it returns us the image field in a formated fashion.
	echo 'background-image: url(' . get_field($hero_image) . ')';
}

function my_masonry() {
	wp_enqueue_script('masonry');
}
add_action('wp_enqueue_scripts', 'my_masonry');

function MasonOnLoad() { ?>  <!-- add masonry setting to the footer -->
  <script>
    (function( $ ) {
        "use strict";
        $(function() {
                // set the container that Masonry will be inside of in a var
                // adjust to match your own wrapper/container class/id name
            var container = document.querySelector( '.event-thumbnail-loop' );
                //create empty var msnry
                var msnry;
            // initialize Masonry after all images have loaded
                imagesLoaded( container, function() {
                    msnry = new Masonry( container, {
                    // adjust to match your own block wrapper/container class/id name
                    itemSelector: '.event-thumbnail-wrapper'
                    });
                });
        });
    }(jQuery));
  </script>
<?php } // end function MasonOnLoad
add_action('wp_footer', 'MasonOnLoad');
