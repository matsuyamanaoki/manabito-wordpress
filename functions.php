<?php
function theme_setup() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo' );

	register_nav_menus( array(
		'global' => 'Global Menu'
	) );

	theme_remove_action_head();
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_remove_action_head() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );
	add_filter( 'emoji_svg_url', '__return_false' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_filter( 'the_content', 'wpautop' );
	add_filter( 'user_can_richedit', '__return_false' );
}

function theme_styles() {
	wp_enqueue_style( 'theme-reset',get_template_directory_uri() . '/css/reset.css', array(), null );
	wp_enqueue_style( 'bxslider-style', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array( 'theme-reset' ), null);
	wp_enqueue_style( 'theme-style',get_template_directory_uri() . '/css/style.css', array( 'bxslider-style' ), null );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(  ), null , true );
	wp_enqueue_script( 'bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'theme-pagetop', get_template_directory_uri() . '/js/pagetop.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'theme-slider', get_template_directory_uri() . '/js/slide.js', array( 'bxslider' ), null, true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => '右のサイドバーエリア',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>'
	));
}
add_action( 'widgets_init', 'theme_widgets_init' );
