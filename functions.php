<?php
/**
 *
 * Theme Functions
 *
 * @category Functions
 * @package  BaseWPTheme
 * @author   sarahcssiqueira
 * @license  https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GPL
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
 * Define path constants
 */
if ( ! defined( 'BASEWPTHEME_DIR_PATH' ) ) {
	define( 'BASEWPTHEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'BASEWPTHEME_DIR_URI' ) ) {
	define( 'BASEWPTHEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

/*
 * Require autoload
 */
require_once __DIR__ . '/vendor/autoload.php';

/*
* Enqueue Styles and Scripts
*/
new BaseWpTheme\Inc\Classes\Assets();
