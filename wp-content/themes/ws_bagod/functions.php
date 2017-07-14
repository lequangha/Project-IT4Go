<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Setup Theme.
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
function genesis_sample_localization_setup(){
	load_child_theme_textdomain( 'genesis-sample', get_stylesheet_directory() . '/languages' );
}

// Add the helper functions.
include_once( get_stylesheet_directory() . '/lib/helper-functions.php' );

// Add Image upload and Color select to WordPress Theme Customizer.
require_once( get_stylesheet_directory() . '/lib/customize.php' );

// Include Customizer CSS.
include_once( get_stylesheet_directory() . '/lib/output.php' );

// Add WooCommerce support.
include_once( get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php' );

// Add the required WooCommerce styles and Customizer CSS.
include_once( get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php' );

// Add the Genesis Connect WooCommerce notice.
include_once( get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php' );

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'Genesis Sample' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.3.0' );

// Enqueue Scripts and Styles.
add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
function genesis_sample_enqueue_scripts_styles() {
	

	wp_enqueue_style( 'genesis-sample-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );


	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'genesis-sample-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		'genesis-sample-responsive-menu',
		'genesis_responsive_menu',
		genesis_sample_responsive_menu_settings()
	);

}



//* Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), '4.0.3' );

}

function woocommerce_setup_genesis() {
  woocommerce_content();
}
add_theme_support( 'woocommerce' );

// Define our responsive menu settings.
function genesis_sample_responsive_menu_settings() {

	$settings = array(
		'mainMenu'          => __( 'Menu', 'genesis-sample' ),
		'menuIconClass'     => 'dashicons-before dashicons-menu',
		'subMenu'           => __( 'Submenu', 'genesis-sample' ),
		'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'       => array(
			'combine' => array(
				'.nav-primary',
				'.nav-header',
			),
			'others'  => array(),
		),
	);

	return $settings;

}

/* Widget use Genesis Hook */

//* Genesis top left menu
add_action( 'genesis_before_header', 'include_before_header_widgets' );

register_sidebar(array(
    'name' => 'Top left menu',
    'id' => 'top-left-menu',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

//* Genesis top right menu
register_sidebar(array(
    'name' => 'Top right menu',
    'id' => 'top-right-menu',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));
function include_before_header_widgets() {
	?>
    <div class="before-header">
	<div class="wrap">
		<?php if ( is_active_sidebar( 'top-left-menu' ) ) : ?>
			<div class="top-left-menu">
				<?php dynamic_sidebar( 'top-left-menu' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'top-right-menu' ) ) : ?>
			<div class="top-right-menu">
				<?php dynamic_sidebar( 'top-right-menu' ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php
}

// Genesis Site tool 

genesis_register_sidebar( array(
'id' => 'site-tool',
'name' => __( 'Site tool', 'genesis' ),
'description' => __( 'Site tool', 'childtheme' ),
) );
add_action( 'genesis_after_header', 'add_genesis_widget_area' );
function add_genesis_widget_area() {
                genesis_widget_area( 'site-tool', array(
		'before' => '<div class="site-tool widget-area">',
		'after'  => '</div>',
    ) );

}

//* Genesis after content 1
add_action( 'genesis_after_content', 'include_after_content_widgets1' );
function include_after_content_widgets1() {
    
}
register_sidebar(array(
    'name' => 'Content 1',
    'id' => 'content-1',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

//* Genesis after content 2
add_action( 'genesis_after_content', 'include_after_content_widgets2' );
function include_after_content_widgets2() {
    
}
register_sidebar(array(
    'name' => 'Content 2',
    'id' => 'content-2',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

//* Genesis after content 3
add_action( 'genesis_after_content', 'include_after_content_widgets3' );
function include_after_content_widgets3() {
    
}
register_sidebar(array(
    'name' => 'Content 3',
    'id' => 'content-3',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Add Accessibility support.
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );



// Add support for custom background.
add_theme_support( 'custom-background' );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 4 );

// Add Image Sizes.
add_image_size( 'featured-image', 720, 400, TRUE );

// Rename primary and secondary navigation menus.
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Mainmenu', 'genesis-sample' ), 'secondary' => __( 'Footer Menu', 'genesis-sample' ) ) );

// Reposition the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

// Reduce the secondary navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

// Modify size of the Gravatar in the author box.
add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
function genesis_sample_author_box_gravatar( $size ) {
	return 90;
}

// Modify size of the Gravatar in the entry comments.
add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;

	return $args;

}

// Hook sidebar Woocommerce //

// Sidebar right //
genesis_register_sidebar( array(
	'id' => 'sidebar-woocommerce',
	'name' => __( 'Sidebar Right woocommerce', 'genesis' ),
	'description' => __( 'Sidebar Right woocommerce', 'childtheme' ),
) );

// Sidebar Left //
genesis_register_sidebar( array(
    'id'        => 'before-secondary-sidebar',
    'name'      => 'Sidebar Left woocommerce',
    'description'   => 'Displays content before the Secondary (ALT) sidebar.',
) );



add_action( 'wp', 'init' );

function init() {

  if ( is_woocommerce() ) {

    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    

	add_action( 'genesis_before_sidebar_widget_area', 'add_genesis_widget_areas' );
	function add_genesis_widget_areas() {
	                genesis_widget_area( 'sidebar-woocommerce', array(
			'before' => '<div class="sidebar-woocommerce widget-area">',
			'after'  => '</div>',
	    ) );

	}



  }

}




//* Do NOT include the opening php tag shown above. Copy the code shown below.
//* Customize the entire footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
	?>
	<p style="float: left;">&copy; 2015 Pixel Industry d.o.o</p>
	<p style="float: right;"><a href="http://wooskins.com/">Payment info </a> |
	<a href="http://wooskins.com/">Shipping</a> |
	<a href="http://wooskins.com/">Privacy policy </a></p>
	<?php
}





