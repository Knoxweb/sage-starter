<?php
/*
 * Plugin Name:       Custom Development Tools
 * Plugin URI:        http://mizner.io
 * Description:       For development only! Disable in production environments.
 * Version:           0.1
 * Author:            Michael Mizner
 * Author URI:        http://mizner.io
 * Text Domain:       custom-development-tools
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI:
 * GitHub Branch:     master
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* One-Liners */
add_filter( 'jetpack_development_mode', '__return_true' );

/* Enable Plugins */
include('debug-bar/debug-bar.php');
include('error-log-monitor/plugin.php');
include('regenerate-thumbnails/regenerate-thumbnails.php');
include ('show-current-template/show-current-template.php');
include ('user-role-editor/user-role-editor.php');
include ('simply-show-ids/simply-show-ids.php');
include ('user-switching/user-switching.php');
include ('wp-optimize/wp-optimize.php');
include ('wp-sync-db-master/wp-sync-db.php');
include ('asset-queue-manager/asset-queue-manager.php');
include ('wordpress-importer/wordpress-importer.php');
include ('wp-exporter/index.php');
include ('duplicate-post/duplicate-post.php');