<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */
?>

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
			<?php
				the_content();
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'soccerpro' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
	
				edit_post_link( __( 'Edit', 'soccerpro' ), '<span class="edit-link">', '</span>' );
			?>
			</div>
			
		</div>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
