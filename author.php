<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="top-page">
	
	<?php include('inc/breadcrumbs.php'); ?>
	<h1 class="entry-title"><?php _e('Novedades','soccerpro') ?></h1>
	
</div>

<section id="primary" class="content-area row">

	<div id="content" class="site-content columns medium-8" role="main">
		
		
		<?php if ( have_posts() ) : ?>

		<?php

				rewind_posts();

				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next page navigation.
				soccerpro_paging_nav();

			else :
				get_template_part( 'content', 'none' );

			endif;
		?>

	</div>
	<?php get_sidebar();?>

</section>

<?php get_footer(); ?>
