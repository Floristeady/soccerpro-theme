<?php
/**
 * Template Name: P&aacute;gina Info Adicional
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content page-02" role="main">

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
					
							<?php include('inc/top-image-page.php'); ?>
						</div>
						
						<div id="bottom-content" class="entry-content">
						
							<div class="row">
						
								<?php 	if (has_excerpt()) : ?>
								<div class="entry-excerpt columns medium-8 medium-centered">
									<?php the_excerpt(); ?>
								</div>
								<?php endif; ?>
								
								<div class="inner columns medium-8 medium-centered">
								<?php the_content(); ?>
								</div>
								
							</div>
							
						</div><!-- .entry-content -->
											
						<div id="extra-content">
							<div class="row">
								<div class="columns medium-8">
									<div class="text">
										<?php if( get_field('subtitulo_extras') ) { ?>							
										<h3><?php the_field('subtitulo_extras'); ?></h3>
										<?php } ?>
										
										<?php if( get_field('texto_extra') ) { ?>							
										<?php the_field('texto_extra'); ?>
										<?php } ?>
									</div>
								</div>
								
								<div class="columns medium-4">
								   
									<?php if( get_field('imagen_extra') ) { 
										$url = get_field('imagen_extra'); $width = 348; $height = 363;
										$crop = true; $retina = false; // Optional. Defaults to 'false'
										$image = matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
										if ( !is_wp_error( $image ) ) { 
										echo '<div class="img"><img alt="" src="'. $image['url'] .'"/></div>';
										} }
					 				?>
								</div>
							</div>
						
						</div>
	
					</article>

				<?php endwhile; ?>

		</div>
	</div>

<?php get_footer(); ?>