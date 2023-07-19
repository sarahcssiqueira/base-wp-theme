<?php
/**
 * Handle Assets
 *
 * @package BaseWPTheme
 */

namespace BaseWpTheme\Inc\Classes;

/**
 * Enqueue Styles and Scripts
 */
class Assets {
	/**
	 * Hooks
	 */
	public function __construct() {

		add_action( 'wp_enqueue_scripts', [ $this, 'basewp_enqueues' ] );

	}

	/**
	 * Register styles and scripts
	 */
	public function basewp_enqueues() {
		$version = wp_get_theme()->get( 'Version' );

		wp_register_style(
			'main-css',
			BASEWPTHEME_DIR_URI . '/build/css/main.css',
			[],
			$version,
			'all'
		);

		wp_register_style(
			'font-awesome',
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
			[],
			$version,
			'all'
		);

		wp_register_style(
			'google-fonts',
			'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&display=swap',
			[],
			$version,
			'all'
		);

		wp_register_script(
			'main-js',
			BASEWPTHEME_DIR_URI . '/build/js/main.js',
			[],
			$version,
			true
		);

		wp_enqueue_style(
			'main-css',
			get_stylesheet_uri(),
			[],
			$version
		);

		wp_enqueue_style(
			'font-awesome',
			get_stylesheet_uri(),
			[],
			$version,
		);

		wp_enqueue_script(
			'main-js'
		);

		wp_enqueue_style(
			'google-fonts',
			get_stylesheet_uri(),
			[],
			$version
		);
	}

}
