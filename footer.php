<?php
/**
 * The template for displaying the footer.
 *
 * @package dentist_theme
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-widgets" aria-label="Widgets do rodapé">
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

		<p class="sr-only">
			<?php esc_html_e( 'Desenvolvido com WordPress', 'dentist_theme' ); ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
