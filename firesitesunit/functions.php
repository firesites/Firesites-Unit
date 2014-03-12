<?php
/**
 * Firesites Unit functions and definitions
 *
 * @package Firesites Unit
 * @since Firesites Unit 1.0
 */
 
 /**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since firesitesunit 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */
	
if ( ! function_exists( 'firesitesunit_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Firesites Unit 1.0
 */
function firesitesunit_setup() {
 
    /**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/inc/template-tags.php' );
 
    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );
 
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on firesitesunit, use a find and replace
     * to change 'firesitesunit' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'firesitesunit', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );
 
    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'firesitesunit' ),
    ) );
}
endif; // firesitesunit_setup
add_action( 'after_setup_theme', 'firesitesunit_setup' );

/**
 * Enqueue scripts and styles
 */
function firesitesunit_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	if(is_front_page()){ wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' ); }
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
	
	wp_enqueue_script( 'jquery' );
	
	if(is_front_page()){ wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '20120725' ); }
	
	wp_enqueue_script( 'ez-sticky-footer', get_template_directory_uri() . '/js/sticky-footer.min.js', array( 'jquery' ), '20120725' );
 
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'firesitesunit_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Firesites Unit 1.0
 */
function firesitesunit_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Top Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<strong class="widget-title">',
        'after_title' => ' </strong>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Masthead Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-4',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-5',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-6',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-7',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-8',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Breadcrumb Widget Area', 'firesitesunit' ),
        'id' => 'sidebar-9',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<strong class="widget-title">',
        'after_title' => '</strong>',
    ) );
}
add_action( 'widgets_init', 'firesitesunit_widgets_init' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * Hooks into the after_setup_theme action.
 *
 */
function firesitesunit_register_custom_background() {
    $args = array(
        'default-color' => 'EFEFEF',
    );
 
    $args = apply_filters( 'firesitesunit_custom_background_args', $args );
 
    if ( function_exists( 'wp_get_theme' ) ) {
        add_theme_support( 'custom-background', $args );
    } else {
        define( 'BACKGROUND_COLOR', $args['default-color'] );
        define( 'BACKGROUND_IMAGE', $args['default-image'] );
        add_custom_background();
    }
}
add_action( 'after_setup_theme', 'firesitesunit_register_custom_background' );
 
/**

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

function alter_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

    $fields['author'] = '<div class="comment-form-author form-group">' . '<label for="author">' . __( 'Name ' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>';
    $fields['email'] = '<div class="comment-form-email form-group">' . '<label for="email">' . __( 'Email ' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="email" class="form-control" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>';
    $fields['url'] = '<div class="comment-form-url form-group">' . '<label for="url">' . __( 'Website' ) . '</label><input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>';
    return $fields;
}

function alter_comment_form_defaults($args){
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$args['title_reply'] = 'Leave a Comment';
	$args['comment_field'] = '<div class="comment-form-comment form-group">' . '<label for="comment">' . __( 'Comment' ) . '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" ' . $aria_req . '></textarea></div>';
    return $args;
}

add_filter('comment_form_default_fields','alter_comment_form_fields');
add_filter('comment_form_defaults','alter_comment_form_defaults');