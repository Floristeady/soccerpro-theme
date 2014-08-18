<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">

		<div id="content" class="site-content row" role="main">
		
			<article style="margin:30px 0 120px;" id="post-0" class="post error404 not-found" role="main">
				<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'soccerpro' ); ?></h1>
				<p><?php _e( 'It appears the page you are looking for does not exist. Perhaps searching, or one of the links below, can help.', 'soccerpro' ); ?></p>

			</article>
			
		</div><!-- #content -->
		
	</div><!-- #primary -->
	
<?php get_footer(); ?>
