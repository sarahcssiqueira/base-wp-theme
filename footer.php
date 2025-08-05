<?php
/**
 *
 * The template for displaying the footer.
 *
 * @package dentist_theme
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-widgets">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<?php dynamic_sidebar( 'footer-1' ); ?>
		<?php endif; ?>
	</div>

	<div class="site-info">
		<p>
			&copy; <?php echo date( 'Y' ); ?> 
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a> — Todos os direitos reservados.
		</p>

		<p class="screen-reader-text">
			Desenvolvido com WordPress
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
