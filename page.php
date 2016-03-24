<?php
/**
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content page-01" role="main">

			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );

				endwhile;
			?>

		</div>
	</div>

<?php get_footer(); ?>