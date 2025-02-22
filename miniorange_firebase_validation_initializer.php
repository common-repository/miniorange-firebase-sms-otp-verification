<?php //phpcs:ignore legacy plugin

/**
 * Plugin Name: Miniorange OTP Verification with Firebase
 * Plugin URI: http://miniorange.com/miniorange-firebase-sms-otp-plugin
 * Description: Login and registration forms. OTP Verification using firebase gateway. 24/7 support.
 * Version: 3.6.1
 * Author: miniOrange
 * Author URI: http://miniorange.com
 * Text Domain: miniorange-firebase-sms-otp
 * Domain Path: /lang
 * WC requires at least: 2.0.0
 * WC tested up to: 5.6.0
 * License: MIT/Expat
 *
 * @package miniorange-firebase-sms-otp-verification
 */

use MoOTP\MoOTPInitializer;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'MOFLR_PLUGIN_NAME', plugin_basename( __FILE__ ) );
$dir_name = substr( MOFLR_PLUGIN_NAME, 0, strpos( MOFLR_PLUGIN_NAME, '/' ) );
define( 'MOFLR_NAME', $dir_name );
/**
 * WooCommerce hook to show that the plugin is compatible with the HPOS functionality.
 */
add_action(
	'before_woocommerce_init',
	function() {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}
);

require 'moautoload.php';
require 'class-mootpinitializer.php';
MoOTPInitializer::instance(); // initialize the main class.
