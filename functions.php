<?php
/**
 * Theme Functions
 *
 * @package BaseWPTheme
 * @author Sarah
 * @license GPL-2.0-or-later
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}


if ( ! defined( 'BASEWPTHEME_DIR_PATH' ) ) {
	define( 'BASEWPTHEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'BASEWPTHEME_DIR_URI' ) ) {
	define( 'BASEWPTHEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}


require_once BASEWPTHEME_DIR_PATH . '/inc/classes/class-assets.php'; 



if ( class_exists( 'BaseWpTheme\Inc\Classes\Assets' ) ) {
	new BaseWpTheme\Inc\Classes\Assets();
}
