<?php

// ADD THEME SUPPORT
add_theme_support( 'title-tag');
add_theme_support( 'post-thumbnails');

// ENQUEUE STYLES AND SCRIPTS
function themeatelier_theme_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.main.css' );
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri( ) );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), 0.1, true );
    wp_enqueue_script( 'jquery' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'themeatelier_theme_scripts' );

// REGISTER NAV MENUS
register_nav_menus( 
	array(
	'main' => __('Main Menu','themeatlier'), 
	)
);


// REGISTER WIDGETS

register_sidebar(array(
	'name'	=> __('Footer Widget','themeatelier'),
	'id'	=> 'footer__widget',
	'description'	=> __('Add widget for the footer', 'themeatelier'),
	'before_widget'	=> '<div>',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h3 class="mb-5 text-base font-medium">',
	'after_title'	=> '</h3>'
));
