<?php
/**
 * Plugin Name:     WooCommerce items export to YML
 * Plugin URI:      https://github.com/mvandrew/woo2yml-yandex-market
 * Version:         1.0.0
 * Description:     WordPress plugin for exporting WooCommerce items to the Yandex Market YML format.
 * Author:          Andrey Mishchenko
 * Tested up to:    4.8
 * Author URI:      http://www.msav.ru/
 * Text Domain:     woo2yml-yandex-market
 * Domain Path:     /languages/
 * License: GNU     General Public License v2 or later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package         woo2yml-yandex-market
 * @author          Andrey Mishchenko
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }


/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) {

	// ------------------------------------------
	// Define Plugin Text Domain
	// ------------------------------------------
	define( 'WOO2YML_YM__TEXT_DOMAIN',              'woo2yml-yandex-market' );


	// ------------------------------------------
	// Determining the plugin version.
	// ------------------------------------------
	$plugin_data = get_plugin_data( __FILE__ );
	define( 'WOO2YML_YM__VERSION',                  $plugin_data['Version']);


	// ------------------------------------------
	// Plugin Paths
	// ------------------------------------------
	define( 'WOO2YML_YM__PLUGIN_DIR',               dirname( __FILE__ ) );
	define( 'WOO2YML_YM__INCLUDES_DIR',             WOO2YML_YM__PLUGIN_DIR . '/includes' );
	define( 'WOO2YML_YM__ADMIN_DIR',                WOO2YML_YM__INCLUDES_DIR . '/admin' );
	define( 'WOO2YML_YM__COMMON_DIR',               WOO2YML_YM__INCLUDES_DIR . '/common' );
	define( 'WOO2YML_YM__HELPERS_DIR',              WOO2YML_YM__INCLUDES_DIR . '/helpers' );


	// ------------------------------------------
	// Include library files
	// ------------------------------------------
	require_once ( WOO2YML_YM__INCLUDES_DIR . '/plugin-hooks.php' );


	// ------------------------------------------
	// Include helper classes
	// ------------------------------------------
	require_once ( WOO2YML_YM__HELPERS_DIR . '/class-woo2yml-yandex-market-i18n.php' );


	// ------------------------------------------
	// Include common classes
	// ------------------------------------------
	require_once ( WOO2YML_YM__COMMON_DIR . '/class-woo2yml-yandex-market-core.php' );


	// ------------------------------------------
	// Include admin classes
	// ------------------------------------------
	if ( is_admin() ) {
		require_once ( WOO2YML_YM__ADMIN_DIR . '/class-woo2yml-yandex-market-admin.php' );
	}

}