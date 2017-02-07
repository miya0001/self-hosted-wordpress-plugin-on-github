<?php
/**
 * Plugin Name:     Gh Auto Updater Example
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     gh-auto-updater-example
 * Domain Path:     /languages
 * Version:         nightly
 *
 * @package         Gh_Auto_Updater_Example
 */

require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );

add_action( 'init', function(){
	$plugin_slug = plugin_basename( __FILE__ );
	$gh_user = 'miya0001';
	$gh_repo = 'self-hosted-wordpress-plugin-on-github';
	new Miya\WP\GH_Auto_Updater( $plugin_slug, $gh_user, $gh_repo );
} );
