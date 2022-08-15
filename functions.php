<?php
/**
 * ailleron functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ailleron
 */

 require_once 'inc/enqueue.php';
 require_once 'inc/pagination.php';
 require_once 'inc/custom-post-types.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ailleron_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ailleron_setup() {

		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page(
				array(
					'page_title' => 'Theme General Settings',
					'menu_title' => 'Theme Settings',
					'menu_slug'  => 'theme-general-settings',
					'capability' => 'edit_posts',
					'redirect'   => false,
				)
			);
			acf_add_options_sub_page(
				array(
					'page_title'  => 'Footer',
					'menu_title'  => 'Footer',
					'parent_slug' => 'theme-general-settings',
				)
			);
		}
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ailleron, use a find and replace
		 * to change 'ailleron' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ailleron', get_template_directory() . '/languages' );

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
				'primary-menu-desktop' => esc_html__( 'Primary menu Desktop', 'ailleron' ),
				'footer-menu' => esc_html__( 'Footer menu', 'ailleron' ),
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
				'ailleron_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'ailleron_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ailleron_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ailleron_content_width', 640 );
}
add_action( 'after_setup_theme', 'ailleron_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ailleron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'language switcher', 'ailleron' ),
			'id'            => 'language-switcher',
			'description'   => esc_html__( 'Add widgets here.', 'ailleron' ),
			'before_widget' => '<div id="%1$s" class="copyright__languages">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ailleron_widgets_init' );


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
 * Security
 */

require get_template_directory() . '/inc/security.php';

add_filter('show_admin_bar', '__return_false');

function text_field_acf( $fieldname ) {
	if(get_field($fieldname)):
		the_field($fieldname);
	endif;
}

function text_sub_field_acf( $fieldname ) {
	if(get_sub_field($fieldname)):
		the_sub_field($fieldname);
	endif;
}

function contact_btn_acf( $fieldname ) {
	$link = get_field($fieldname, 'options');
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<a class="button button--contact" role="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
			<svg id="Component_6_12" data-name="Component 6 – 12" xmlns="http://www.w3.org/2000/svg" width="161" height="36" viewBox="0 0 161 36">
				<rect id="Rectangle_4" data-name="Rectangle 4" width="161" height="36" rx="15" fill="#d50a0a"/>
				<text id="Contact" transform="translate(88 22)" fill="#fff" font-size="14" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="-29" y="0"><?php echo $link_title; ?></tspan></text>
				<path id="Icon_material-mail-outline" data-name="Icon material-mail-outline" d="M16.566,6H4.507a1.505,1.505,0,0,0-1.5,1.507L3,16.551a1.512,1.512,0,0,0,1.507,1.507H16.566a1.512,1.512,0,0,0,1.507-1.507V7.507A1.512,1.512,0,0,0,16.566,6Zm0,10.551H4.507V9.015l6.029,3.768,6.029-3.768Zm-6.029-5.276L4.507,7.507H16.566Z" transform="translate(31 5.941)" fill="#fff"/>
			</svg>
		</a>
	<?php endif;
}

function hamburger_button() { 
echo 
	'
	<button class="button button--hamburger">
		<svg width="25" height="25" viewBox="0 0 38 30" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M2.28125 2.44792H35.6146M2.28125 14.9479H35.6146M2.28125 27.4479H35.6146" stroke="#F95157" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	</button>
	';
}

function button_arrow_down( $fieldname ) {
	$link = get_field($fieldname);
	if( $link ): ?>
		<a class="button button--arrowDown" role="button" href="<?php echo esc_url( $link ); ?>">
			<svg id="Component_21_3" data-name="Component 21 – 3" xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49">
				<circle id="Ellipse_12" data-name="Ellipse 12" cx="24.5" cy="24.5" r="24.5" fill="#d50a0a"/>
				<g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(12.5 11.5)">
					<path id="Path_537" data-name="Path 537" d="M18,7.5V18" transform="translate(-5.25)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
					<path id="Path_538" data-name="Path 538" d="M18,18l-5.25,5.25L7.5,18" transform="translate(0 -5.25)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
				</g>
			</svg>
		</a>
	<?php endif;
}