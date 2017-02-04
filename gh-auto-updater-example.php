<?php
/**
 * Plugin Name:     Gh Auto Updater Example
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     gh-auto-updater-example
 * Domain Path:     /languages
 * Version:         0.5.0
 *
 * @package         Gh_Auto_Updater_Example
 */

require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );

add_action( 'init', function(){
	$gh_user = 'miya0001';
	$gh_repo = 'gh-auto-updater-example';
	new Miya\WP\GH_Auto_Update( $gh_user, $gh_repo, __FILE__ );
} );
