<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="top-page">

	<?php include('inc/breadcrumbs.php'); ?>

	<?php
		foreach((get_the_category()) as $category) {
		    echo '<h1 class="entry-title">' .$category->cat_name . '</h1> ';
		} ?>
	
</div>

<section id="primary" class="content-area row">
		<div id="content" class="site-content columns medium-8" role="main">

			<?php if ( have_posts() ) : ?>

			<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );

					endwhile;
					soccerpro_paging_nav();

				else :
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div>

		<?php get_sidebar();?>

</section>

<?php get_footer(); ?>