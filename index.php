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
	
	<div id="top-page">
	
		<?php include('inc/breadcrumbs.php'); ?>
		<h1 class="entry-title"><?php _e('Novedades','soccerpro') ?></h1>
	
	</div>

	<div id="primary" class="content-area row">
	
		<div id="content" class="site-content columns medium-8" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );

				endwhile;
				soccerpro_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;  ?>

		</div>
	
	<?php get_sidebar(); ?>
		
	</div>
	
</div>

<?php get_footer(); ?>
