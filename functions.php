<?php
require('lib/codestar/codestar-framework.php');
// include_once('inc/admin-options.php');
include_once('inc/metabox-options.php');

if (site_url() == "themeatelier-official.local") {
	define("VERSION", time());
} else {
	define("VERSION", wp_get_theme()->get("Version"));
}

// ADD THEME SUPPORT
function themeatelier_initialize()
{
	load_theme_textdomain('themeatelier', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('wp-block-styles');
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat'
	));
	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	// REGISTER NAV MENUS
	register_nav_menus(
		array(
			'main' => __('Main Menu', 'themeatelier'),
		)
	);
}
add_action('after_setup_theme', 'themeatelier_initialize');

// ENQUEUE STYLES AND SCRIPTS
function themeatelier_theme_scripts()
{
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', array(), time());
	wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.css', array(), time());
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.main.css', array(), time());
	wp_enqueue_style('stylesheet', get_stylesheet_uri(), VERSION);

	wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array('jquery'), VERSION, true);
	wp_enqueue_script('multi-countdown', get_template_directory_uri() . '/assets/js/multi-countdown.js', array('jquery'), VERSION, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'themeatelier_theme_scripts');


require get_template_directory() . '/inc/template-tags.php';

// function remove_search_input_value($form) {
//     $form = str_replace('value="' . get_search_query() . '"', '', $form);
//     return $form;
// }
// add_filter('get_search_form', 'remove_search_input_value');


// REGISTER WIDGETS
function themeatelier_widegets_init()
{
	register_sidebar(array(
		'name'	=> esc_html__('Footer Widget', 'themeatelier'),
		'id'	=> 'footer__widget',
		'description'	=> esc_html__('Add widget for the footer', 'themeatelier'),
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="mb-5 text-base ">',
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
	];

	register_post_type("portfolio", $args);
}

add_action('init', 'themeateler_register_portfolio_cpt');

add_action('init', 'create_portfolio_taxonomy', 0);

function create_portfolio_taxonomy()
{


	$labels = array(
		'name' => _x('Skills', 'taxonomy general name'),
		'singular_name' => _x('Skill', 'taxonomy singular name'),
		'search_items' =>  __('Search Skill', 'themeatelier'),
		'all_items' => __('All Skills', 'themeatelier'),
		'parent_item' => __('Parent Skill', 'themeatelier'),
		'parent_item_colon' => __('Parent Skill:', 'themeatelier'),
		'edit_item' => __('Edit Skill', 'themeatelier'),
		'update_item' => __('Update Skill', 'themeatelier'),
		'add_new_item' => __('Add New Skill', 'themeatelier'),
		'new_item_name' => __('New Skill Name', 'themeatelier'),
		'menu_name' => __('Skills', 'themeatelier'),
	);

	// Now register the taxonomy
	register_taxonomy('skills', array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'skill'),
	));
}

//======= Account Dashboard Menu =======//
function avalue_dot($key = null, $array = array(), $default = false)
{
	$array = (array) $array;
	if (! $key || ! count($array)) {
		return $default;
	}
	$option_key_array = explode('.', $key);

	$value = $array;

	foreach ($option_key_array as $dot_key) {
		if (isset($value[$dot_key])) {
			$value = $value[$dot_key];
		} else {
			return $default;
		}
	}
	return $value;
}

function array_get($key = null, $array = array(), $default = false)
{
	return avalue_dot($key, $array, $default);
}

function account_pages()
{
	$nav_menu      = array(
		'index'            => array(
			'title' => __('Account Dashboard', 'themeatelier'),
		),
		'purchase-history'    => array(
			'title' => __('Purchase History', 'themeatelier'),
		),
		'license-keys'    => array(
			'title' => __('License Keys', 'themeatelier'),
		),
		'subscriptions'    => array(
			'title' => __('My Subscriptions', 'themeatelier'),
		),
		'downloads'    => array(
			'title' => __('File Downloads', 'themeatelier'),
		),
		'edit-profile'    => array(
			'title' => __('Edit Profile', 'themeatelier'),
		),
		'logout'      => array(
			'title' => __('Logout', 'themeatelier'),
		),
	);
	return apply_filters('account/nav_items_all', $nav_menu);
}

function account_nav_ui_items()
{
	$nav_items = account_pages();
	foreach ($nav_items as $key => $nav_item) {
		if (is_array($nav_item)) {

			if (isset($nav_item['show_ui']) && ! array_get('show_ui', $nav_item)) {
				unset($nav_items[$key]);
			}
			if (isset($nav_item['auth_cap']) && ! current_user_can($nav_item['auth_cap'])) {
				unset($nav_items[$key]);
			}
		}
	}
	return apply_filters('account/nav_ui_items', $nav_items);
}


function account_page_permalink($page_key = '')
{
	if ('index' === $page_key) {
		$page_key = '';
	}
	return trailingslashit(get_permalink(null)) . $page_key;
}

if (! function_exists('account_get_template')) {
	/**
	 * Load template with override file system
	 *
	 * @since 1.0.0
	 *
	 * @param null $template template.
	 *
	 * @return bool|string
	 */
	function account_get_template($template = null)
	{
		if (! $template) {
			return false;
		}
		$template = str_replace('.', DIRECTORY_SEPARATOR, $template);

		/**
		 * Get template first from child-theme if exists
		 * If child theme not exists, then get template from parent theme
		 */
		$template_location = trailingslashit(account_function()->path) . "page-templates/{$template}.php";

		return apply_filters('account_get_template_path', $template_location, $template);
	}
}

if (! function_exists('account_function')) {
	/**
	 * Idonate helper function.
	 *
	 * @since 1.0.0
	 *
	 * @return object
	 */
	function account_function()

	{
		if (isset($GLOBALS['account_plugin_info'])) {
			return $GLOBALS['account_plugin_info'];
		}
		$path    = plugin_dir_path(__FILE__);

		// Prepare the basepath.
		$home_url  = get_home_url();
		$parsed    = wp_parse_url($home_url);
		$base_path = (is_array($parsed) && isset($parsed['path'])) ? $parsed['path'] : '/';
		$base_path = rtrim($base_path, '/') . '/';
		// Get current URL.
		$current_url = trailingslashit($home_url) . substr($_SERVER['REQUEST_URI'], strlen($base_path)); //phpcs:ignore

		$plugin_data = get_file_data(__FILE__, array('Version' => 'Version'));
		$version = $plugin_data['Version'];

		$info = array(
			'path'                   => $path,
			'url'                    => plugin_dir_url(__FILE__),
			'icon_dir'               => plugin_dir_url(__FILE__) . 'assets/images/images-v2/icons/',
			'v2_img_dir'             => plugin_dir_url(__FILE__) . 'assets/images/images-v2/',
			'current_url'            => $current_url,
			'basename'               => plugin_basename(__FILE__),
			'basepath'               => $base_path,
			'version'                => $version, // Dynamically set version
			'nonce_action'           => 'account_nonce_action',
			'nonce'                  => '_account_nonce',
		);


		$GLOBALS['account_plugin_info'] = (object) $info;
		return $GLOBALS['account_plugin_info'];
	}
}


function account_load_template($template = null, $variables = array())
{
	$variables = (array) $variables;
	$variables = apply_filters('get_account_load_template_variables', $variables);
	extract($variables);
	$isLoad = apply_filters('should_account_load_template', true, $template, $variables);
	if (! $isLoad) {
		return;
	}

	do_action('account_load_template_before', $template, $variables);
	$template_file = account_get_template($template);

	if (file_exists($template_file)) {
		include account_get_template($template);
	} else {
		do_action('account_after_template_not_found', $template);
	}
	do_action('account_load_template_after', $template, $variables);
}


add_filter('query_vars', 'account_register_query_vars');
function account_register_query_vars($vars)
{
	$vars[] = 'account_page';
	$vars[] = 'account_sub_page';

	$vars[] = 'account_profile_username';
	return $vars;
}


add_action('generate_rewrite_rules', 'add_rewrite_rules');
function add_rewrite_rules(\WP_Rewrite $wp_rewrite)
{
	$dashboard_page_slug = 'account';

	$new_rules = array(
		"({$dashboard_page_slug})/(.+?)/?$" => 'index.php?pagename=' . $wp_rewrite->preg_index(1) . '&account_page&account_sub_page=' . $wp_rewrite->preg_index(2),
	);


	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}


// Flush rewrite rules on theme activation.
function themeatelier_activate()
{
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'themeatelier_activate');



function custom_move_renewal_form() {
    // Remove the function from the original hook.
    remove_action( 'edd_before_purchase_form', 'edd_sl_renewal_form', -1 );

    // Add the function to the new hook.
    add_action( 'edd_before_checkout_cart_form', 'edd_sl_renewal_form', 10 );
}
add_action( 'init', 'custom_move_renewal_form' );

/*
CUSTOM LOGIN PAGE
*/

function themeatelier_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'themeatelier_login_logo_url' );

function themeatelier_login_logo_url_title() {
    return "ThemeAtelier";
}
add_filter( 'login_headertext', 'themeatelier_login_logo_url_title' );

function themeatelier_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'themeatelier_login_stylesheet' );

// REDIRECT ACCOUNT PAGE FROM WP-ADMIN PAGE
function ta_login_redirect( $redirect_to, $request, $user ){
    return home_url('/account');
}
add_filter( 'login_redirect', 'ta_login_redirect', 10, 3 );




function tf_before_login_register_form() {
	?>
	<div class="flex justify-between mb-2 align-center">
	<h4 class="!mt-0 !mb-0">Account Info</h4>
	<?php if(!is_user_logged_in()) : ?> 
		<div class="mb-2 text-right text-md"><span id="toggle-text">Already have an account? <span class="login-toggler">Login</span> </span></div>
	<?php endif; ?>
	</div><?php
}

add_filter('edd_purchase_form_before_register_login', 'tf_before_login_register_form');

function tf_edd_checkout_personal_info_text() {
	return ;
}

add_action('edd_checkout_personal_info_text', 'tf_edd_checkout_personal_info_text');