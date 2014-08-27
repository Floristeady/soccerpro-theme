<?php
/**
 * Template Name: P&aacute;gina Simple
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content page-03" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div id="top-page" class="<?php if ( has_post_thumbnail()) { ?>thumb<?php } ?>">
						
							<div class="row text ">
								
								<?php  include('inc/breadcrumbs.php'); ?>
								
								<div class="title">
								
								<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' ); 
								?>
									
								</div>
								
							</div>		

						</div>
						
						<div id="bottom-content" class="entry-content">
						
							<div class="row">
							
								<div class="inner">
						
									<?php 	if (has_excerpt()) : ?>
									<div class="entry-excerpt columns medium-8 medium-centered">
										<?php the_excerpt(); ?>
									</div>
									<?php endif; ?>
									
									<div class="inner columns medium-8 medium-centered">
									<?php the_content(); ?>
									</div>
									
								</div>
								
							</div>
							
						</div><!-- .entry-content -->
												
					</article><!-- #post-## -->

				<?php endwhile; ?>
		</div>
	</div>

<?php get_footer(); ?>