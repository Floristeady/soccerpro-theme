<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="top-page">
	
	<?php include('inc/breadcrumbs.php'); ?>
	<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'soccerpro' ), get_search_query() ); ?></h1>
	
</div>

<section id="primary" class="content-area row">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>
				<ul id="results">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>

					<li>
			
						<div class="row">

							<div class="text columns <?php if('soccerproducts' == $post->post_type) { ?>medium-3 medium-offset-1<?php } else { ?> medium-11 medium-offset-1<?php } ?>">
								
								<?php if('soccerproducts' == $post->post_type) { 
								 	echo '<h6>Balones</h6>';
							     } else if ('post' == $post->post_type) { 
									 echo '<h6>Novedades</h6>';
								 } ?>
								
								<h2 class="product-title"><a class="font-robotoc" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'soccerpro' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<?php the_excerpt(); ?>
								<a style="" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to%s', 'soccerpro' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="button radius my-button ">Leer más</a>
							</div>
							
							<?php if('soccerproducts' == $post->post_type) { ?>
							<div class="img columns medium-7 medium-offset-1">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'soccerpro' ), the_title_attribute( 'echo=0' ) ); ?>">
								<?php the_post_thumbnail('featured-product'); ?>
								</a>
							</div>
							<?php } ?>
		
						</div>
					</li>

					<?php endwhile;
					soccerpro_paging_nav();

				else :
					get_template_part( 'content', 'none' );
					echo '</ul>';
				endif;
			?>

		</div><!-- #content -->
	</section><!-- #primary -->
<?php get_footer(); ?>
