<div id="box-contact" class="reveal-modal medium" data-reveal>
		<a href="#" class="close-reveal-modal">x</a>
		
	   	<?php $args = array(
				'post_type'	=> array('page'),
				'posts_per_page' => 1,
				'meta_query' => array(
					array( 'key' => 'mostrar_ventana', 'value' => '1')
				) );
			$featured_page = new WP_Query( $args ); ?>
			
 	    <?php if($featured_page->have_posts()) : while($featured_page->have_posts()) : $featured_page->the_post(); ?>
		<div id="top-page">

			<div class="row text">
				
				<div class="title column large-6">
				
				<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); 
				
					if (has_excerpt()) : ?>
					<div class="entry-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<?php endif; ?>
				</div>
				
			</div>		
						
			<div class="back">
				<?php include('top-image-page.php'); ?>
			</div>
		</div>
		
		<div class="entry-content row">
		<div class="inner columns large-8 large-offset-2">
		<div class="bullet"></div>
		<?php
			the_content();
		?>
		</div>
	</div><!-- .entry-content -->

		
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>

</div>

