<?php
/**
 * rtcamp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rtcamp
 */

if ( ! function_exists( 'rtcamp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rtcamp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rtcamp, use a find and replace
		 * to change 'rtcamp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rtcamp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rtcamp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'rtcamp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rtcamp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rtcamp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rtcamp_content_width', 640 );
}
add_action( 'after_setup_theme', 'rtcamp_content_width', 0 );

/*Adding support excerpts on pages */

add_post_type_support( 'page', 'excerpt' );

/*Display Child pages Shortcode */
require_once get_stylesheet_directory() . '/shortcode-display-child-pages.php';
add_shortcode('display-child-pages', 'display_child_pages');
/*Display Child pages Shortcode Ends */

/*  Register Footer menu display location */

function register_footer_menu()
{
    register_nav_menu('footer-menu', __('Footer menu'));
}

add_action('init', 'register_footer_menu');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rtcamp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rtcamp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rtcamp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// First footer widget area, located in the footer. Empty by default.
register_sidebar(array(
    'name' => __('First Footer Widget Area', 'rtcamp'),
    'id' => 'first-footer-widget-area',
    'description' => __('The first footer widget area', 'rtcamp'),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Second Footer Widget Area, located in the footer. Empty by default.
register_sidebar(array(
    'name' => __('Second Footer Widget Area', 'rtcamp'),
    'id' => 'second-footer-widget-area',
    'description' => __('The second footer widget area', 'rtcamp'),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Third Footer Widget Area, located in the footer. Empty by default.
register_sidebar(array(
    'name' => __('Third Footer Widget Area', 'rtcamp'),
    'id' => 'third-footer-widget-area',
    'description' => __('The third footer widget area', 'rtcamp'),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Fourth Footer Widget Area, located in the footer. Empty by default.
register_sidebar(array(
    'name' => __('Fourth Footer Widget Area', 'rtcamp'),
    'id' => 'fourth-footer-widget-area',
    'description' => __('The fourth footer widget area', 'rtcamp'),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

}
add_action( 'widgets_init', 'rtcamp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rtcamp_scripts() {
	wp_enqueue_style( 'rtcamp-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'rtcamp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '20200127', true);

	wp_enqueue_script( 'rtcamp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rtcamp_scripts' );

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

/*Recent post news shortcode*/
require_once get_stylesheet_directory() . '/recent-post-shortcode.php';
add_shortcode('recent-post-shortcode', 'recent_post_news');
/*Recent post news shortcode */


function theme_option_page() {
?>
<div class="wrap">
<h1>Custom Theme Options Page</h1>
<form method="post" action="options.php" enctype="multipart/form-data">
<?php
// display settings field on theme-option page
settings_fields("theme-options-grp");
// display all sections for theme-options page
do_settings_sections("theme-options");
submit_button();
?>
</form>
</div>
<?php }

function add_theme_menu_item() {
add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);}
add_action("admin_menu", "add_theme_menu_item");
function theme_section_description(){
echo '<p>Theme Option Section</p>';}


function logo_setting()
{
	echo '<input type="file" name="logo" />';
}

function handle_logo_upload()
{
   $keys = array_keys($_FILES); $i = 0; foreach ( $_FILES as $image ) {   // if a files was upload  
	 if ($image['size']) {    
		  // if it is an image    
		   if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {      
				$override = array('test_form' => false);      
				 // save the file, and store an array, containing its location in $file      
				  $file = wp_handle_upload( $image, $override );     
				  $theme_options[$keys[$i]] = $file['url'];    
			 }
			  else
			  {       // Not an image.       
				 $options = get_option('theme_options');      
				 $theme_options[$keys[$i]] = $options[$logo];    
					// Die and let the user know that they made a mistake.      
					 wp_die('No image was uploaded.');   
			 } 
	  }   // Else, the user didn't upload a file.  
			 // Retain the image that's already on file.  
	 else {    
		  $options = get_option('theme_options');   
		 $theme_options[$keys[$i]] = $options[$keys[$i]];  
	 }   
	 $i++; 
	} 
	return $theme_options;
}

function display_copyright_text(){
//php code to take input from text field for twitter URL.
?>
<input type="text" name="test_copyright_text" id="test_copyright_text" value="<?php echo get_option('test_copyright_text'); ?>" />
<?php
}

function test_theme_settings(){
add_option('first_field_option',1);// add theme option to database
add_settings_section( 'first_section', 'New Theme Options Section',
'theme_section_description','theme-options');
add_settings_field("logo", "Logo", "logo_setting", "theme-options", "first_section");
register_setting('theme-options-grp', 'logo', "handle_logo_upload");
add_settings_field('copyright_text', 'Copyright Text', 'display_copyright_text', 'theme-options', 'first_section');
register_setting( 'theme-options-grp', 'test_copyright_text');
}
add_action('admin_init','test_theme_settings');

