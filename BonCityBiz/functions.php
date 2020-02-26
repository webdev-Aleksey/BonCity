<?php
$pearl_include_path = get_template_directory() . '/includes/';
$pearl_admin_includes_path = $pearl_include_path . 'admin/';
$pearl_theme_include_path = $pearl_include_path . 'theme/';
$pearl_widgets_path = $pearl_include_path . '/widgets/';

/*Helpers*/
require_once($pearl_theme_include_path . 'lib/array_helper.php');

/*Theme setups (image sizes, content width, post supports, sidebars, menus);*/
require_once($pearl_theme_include_path . 'setups.php');

/*Register scripts/styles*/
require_once($pearl_theme_include_path . 'enqueue.php');

/*Custom theme functions*/
require_once($pearl_theme_include_path . 'theme.php');
require_once($pearl_theme_include_path . 'theme-ajax.php');
require_once($pearl_theme_include_path . 'print_styles.php');
require_once($pearl_theme_include_path . 'layout_config.php');
require_once($pearl_theme_include_path . 'template_hooks.php');
require_once($pearl_theme_include_path . 'comments.php');
require_once($pearl_theme_include_path . 'post_stats.php');

/*Header helper functions*/
require_once($pearl_theme_include_path . 'header_helpers.php');

/*WooCommerce*/
if (class_exists('WooCommerce')) {
	require_once($pearl_theme_include_path . '/woocommerce/woocommerce.php');
}

if (defined('WPB_VC_VERSION')) {
	require_once($pearl_theme_include_path . '/vc/helpers.php');
	require_once($pearl_theme_include_path . '/vc/visual_composer.php');
	require_once($pearl_theme_include_path . '/vc/grid_builder.php');
}

/*Admin includes*/
if (is_admin()) {
	/*Product registration*/
	require_once($pearl_admin_includes_path . '/product_registration/admin.php');

	/*Theme options*/
	require_once($pearl_admin_includes_path . 'theme_options/main.php');
	require_once($pearl_admin_includes_path . 'theme_options/includes/presets.php');
	require_once($pearl_admin_includes_path . 'theme_options/includes/helpers.php');
	require_once($pearl_admin_includes_path . 'theme_options/screen.php');
	require_once($pearl_admin_includes_path . 'theme_options/includes/enqueue.php');

	/*TGM for plugins registration*/
	require_once($pearl_admin_includes_path . 'tgm/registration.php');

	/*Admins styles*/
	require_once($pearl_admin_includes_path . 'enqueue.php');

	/*Visual composer*/
	if (defined('WPB_VC_VERSION')) {
		require_once($pearl_theme_include_path . '/vc/main.php');
	}

	/*admin helpers*/
	require_once($pearl_admin_includes_path . '/admin_helpers.php');
	
	/*Taxonomy fields*/
	require_once($pearl_admin_includes_path . '/taxonomy_fields/main.php');
}

function pearl_glob_pagenow(){
    global $pagenow;
    return $pagenow;
}

function pearl_glob_wpdb(){
    global $wpdb;
    return $wpdb;
}
function load_fonts() 
 {             
 wp_register_style('et-googleFonts', 
 'https://fonts.googleapis.com/css?family=Montserrat&display=swap');             
 wp_enqueue_style( 'et-googleFonts');         
 }     
 add_action('wp_print_styles', 'load_fonts');