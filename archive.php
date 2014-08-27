<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="top-page">
	
	<?php include('inc/breadcrumbs.php'); ?>
	<h1 class="entry-title">Novedades</h1>
	
</div>

<section id="primary" class="content-area row">

		<div id="content" class="site-content columns medium-8" role="main">

			<?php if ( have_posts() ) : ?>

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					soccerpro_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
		
		<?php get_sidebar(); ?>
	</section>

<?php  get_footer(); ?>