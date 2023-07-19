<?php
/**
 * The template that displays all of the <head> section
 *
 * @package BaseWPTheme
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<title><?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
