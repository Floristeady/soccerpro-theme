<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

	<div id="top-page">
	<?php include('inc/breadcrumbs.php'); ?>
	
	</div>
	
	<div id="primary" class="content-area row">
	
		<div id="content" class="site-content columns medium-8" role="main">

		

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					soccerpro_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

		</div>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
