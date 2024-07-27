<?php
/*
Plugin Name: Renoteck Core Plugin
Plugin URI: #
Description:  
Version: 1.0
Author: Rombt
Author URI: #
License: Proprietary
Text Domain: rmbt_renoteck 
*/

if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function rmbt_renoteck_scripts_admin()
{
	wp_enqueue_style('rmbt_renoteck-admin_main', plugins_url() . '/core-plugin/assets/styles/main-style.min.css', array(), '1.0', 'all');
	wp_enqueue_script('rmbt_renoteck-admin_core_jq', plugins_url() . '/core-plugin/assets/js/admin.main.min.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'rmbt_renoteck_scripts_admin');

require_once plugin_dir_path(__FILE__) . 'inc/general-admin.php';
// require_once plugin_dir_path(__FILE__) . 'inc/ajax.php';
// require_once plugin_dir_path(__FILE__) . 'inc/gutenberg/index.php';
// require_once plugin_dir_path(__FILE__) . 'inc/acf.php';

function rmbt_get_images_sizes()
{

	return array(
		'post' => array(
			array(
				'name' => 'rmbt_about-us-gallery',
				'width' => 330,
				'height' => 234,
				'crop' => true,
			),

		)
	);
}
add_action('plugin_loaded', 'rmbt_register_image_size');
function rmbt_register_image_size()
{
	if (function_exists('rmbt_get_images_sizes')) {
		foreach (rmbt_get_images_sizes() as $post_type => $sizes) {
			foreach ($sizes as $config) {
				add_image_size($config['name'], $config['width'], $config['height'], $config['crop']);
			}
		}
	}
}

/**
 * For processing type errors "warning" in blocks try-catch
 */
function errorWarning($errno, $errmbt, $errfile, $errline)
{
	// the code of error  processing must be here if it need you
	// echo "Ошибка: [$errno] $errmbt в файле $errfile на строке $errline\n";
	return true;
	// return false; // прервать обработку ошибки
}
set_error_handler("errorWarning");



//==============================================================================================
//==============================================================================================