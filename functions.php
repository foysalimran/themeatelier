<?php
require('lib/codestar/codestar-framework.php');
include_once('inc/admin-options.php');
include_once('inc/metabox-options.php');
// ADD THEME SUPPORT
function themeatelier_initialize()
{
	load_theme_textdomain('themeatelier', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('wp-block-styles');
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));
	add_theme_support('post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	));
	// REGISTER NAV MENUS
	register_nav_menus(
		array(
			'main' => __('Main Menu', 'themeatlier'),
		)
	);
}
add_action('after_setup_theme', 'themeatelier_initialize');

// ENQUEUE STYLES AND SCRIPTS
function themeatelier_theme_scripts()
{
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.main.css');
	wp_enqueue_style('stylesheet', get_stylesheet_uri());

	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 0.1, true);
	wp_enqueue_script('jquery');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'themeatelier_theme_scripts');



// REGISTER WIDGETS
function themeatelier_widegets_init()
{
	register_sidebar(array(
		'name'	=> __('Footer Widget', 'themeatelier'),
		'id'	=> 'footer__widget',
		'description'	=> __('Add widget for the footer', 'themeatelier'),
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="mb-5 text-base font-medium">',
		'after_title'	=> '</h3>'
	));
}
add_action('widgets_init', 'themeatelier_widegets_init');

// REGISTER CUSTOM POSTS
function themeateler_register_portfolio_cpt()
{

	/**
	 * Post Type: Portfolios.
	 */

	$labels = [
		"name" => esc_html__("Portfolios", "themeatlier"),
		"singular_name" => esc_html__("Portfolio", "themeatlier"),
	];

	$args = [
		"label" => esc_html__("Portfolios", "themeatlier"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "portfolio", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "author"],
		"show_in_graphql" => false,
		'taxonomies'          => array('category'),
	];

	register_post_type("portfolio", $args);
}

add_action('init', 'themeateler_register_portfolio_cpt');
