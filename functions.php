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
function theme_enqueue_assets() {
    // CSS compilado
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/style.min.css', [], null);
    
    // JS compilado
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/dist/js/main.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

