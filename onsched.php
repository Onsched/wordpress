<?php
/*
 * Plugin Name: Onsched
 * Version: 1.0
 * Plugin URI: http://onsched.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Justin Pruskowski
 * Author URI: http://onsched.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: onsched
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Justin Pruskowski
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-onsched.php' );
require_once( 'includes/class-onsched-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-onsched-admin-api.php' );
require_once( 'includes/lib/class-onsched-post-type.php' );
require_once( 'includes/lib/class-onsched-taxonomy.php' );

/**
 * Returns the main instance of Onsched to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Onsched
 */
function Onsched () {
	$instance = Onsched::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Onsched_Settings::instance( $instance );
	}

	return $instance;
}

Onsched();
