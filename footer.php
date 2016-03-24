<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */
?>							
			</div><!-- #main-inner -->
		</div><!-- #main -->
	
	</div><!-- #page -->
	
	<footer id="footer" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
		<div class="widget-social">
			<?php dynamic_sidebar( 'extra-widget-area' ); ?>
		</div>
		<?php endif; ?>
		<ul id="footer-content" class="row">	
		<?php get_sidebar( 'footer' ); ?>
		</ul>
		
		<a title="por Inusual Estudio" style="position: absolute; right: 6px; bottom: 6px;" target="_blank" href="http://www.inusualestudio.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/elements/byinusualcolor.svg"  src="" alt="por Inusual Estudio"></a>
	</footer> 
	<?php wp_footer(); ?>
	</body>
</html>