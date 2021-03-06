<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer about" role="contentinfo">
				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="site-info">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button> -->

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					
				
						<p>Brought to you by <?php echo sprintf( '<a href="%1s">%2s</a>', esc_url( 'https://github.com/jenjjy/project5-quotesondev' ), 'Jennifer Yiu' ); ?></p>
						
				
					</div><!-- .site-info -->
				</nav><!-- #site-navigation -->
			</footer><!-- #colophon -->
			</div><!-- #page -->

		<?php wp_footer(); ?>
		
	</body>
</html>
