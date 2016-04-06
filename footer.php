<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MDLPress
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="mdl-mini-footer" role="contentinfo">
			
			<div class="mdl-mini-footer__left-section">
				<div class="mdl-logo">
					<?php bloginfo('name'); ?>
				</div>
				<ul class="mdl-mini-footer__link-list">
					<li><a href="">Link 1</a></li>
					<li><a href="">Link 2</a></li>
					<li><a href="">Link 3</a></li>
				</ul>				
			</div>
 
			<div class="site-info mdl-mini-footer__right-section">
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mdlpress' ), 'mdlpress', '<a href="http://trevo.cl" rel="designer">Sebastián Infanta</a>' ); ?>
				<button class="mdl-mini-footer__social-btn"><i class="material-icons">queue_music</i></button>
				<button class="mdl-mini-footer__social-btn"><i class="material-icons">android</i></button>
				<button class="mdl-mini-footer__social-btn"><i class="material-icons">attachment</i></button>

			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</main>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
