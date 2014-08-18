<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area row">
	
		<div id="content" class="site-content columns medium-8" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				soccerpro_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif; ?>

		</div>
	
	<?php get_sidebar(); ?>
		
	</div>
	
</div>

<?php get_footer(); ?>