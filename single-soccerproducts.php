<?php
/**
  * The Template for Sigle 'soccerproducts'
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<?php include('inc/breadcrumbs.php'); ?>
	
<div id="primary" class="content-area">

	<?php
	while ( have_posts() ) : the_post(); ?>

	<div id="top-page">

		<h1 class="product-title"><?php the_title() ?></h1>

	</div>
	
	<div id="center-product">
	
		<div class="site-content row" role="main">

			<div class="columns medium-4 right">
				
					<div class="entry-content">
					<?php the_content(); ?>
					
					<?php include('inc/share-social.php'); ?>
					</div>
			</div>
				
			<?php  $rows = get_field('galeria_producto');  ?>
			
			<?php if($rows) { ?>
			
			<div id="product-gallery" class="flexslider">
					<?php echo '<ul class="slides">';
					foreach($rows as $row) { ?>
						<li>
						
						<?php 
							$url = $row['imagen_galeria_producto']; $width = 1000; $height = 572;
							$crop = true; $retina = true; // Optional. Defaults to 'false'
							$image = matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
							if ( !is_wp_error( $image ) ) { 
							echo '<img alt="" src="'. $image['url'] .'"/>';
							}
		 				?>

		 				</li>
					<?php } echo '</ul>'; ?>
					
		    </div>
			
			<?php } ?>
			
		</div>
			
		<?php if( get_field('beneficios_producto') ): ?>
		<div id="product-benefits">
			
			<div class="row">
				
				<div class="medium-4 columns">
					<h2><?php _e('Beneficios','soccepro'); ?></h2>
				</div>
				
				<div class="columns medium-7 text">
				<?php the_field('beneficios_producto'); ?>
				</div>
			</div>
			
		</div>
		<?php endif;?>
			

			<?php // Previous/next post navigation.
			//soccerpro_post_nav(); ?>

		<?php endwhile; ?>
	
	</div><!--center-->
	
	<div id="bottom-product">
		<div class="row">
		<?php if( get_field('texto_secundario') ): ?>
			<div class="columns medium-4 text">
				<p><?php the_field('texto_secundario'); ?></p>
			</div>
		<?php endif;?>
		
			<div class="columns medium-8 extras">
			    <?php if( get_field('descripcion_tecnica') ): ?>
				<div class="btn">
				<a class="open">+</a>
				<span class="more"><?php _e('Descripción <br>Técnica','soccerpro');?></span>
				</div>
				<?php endif;?>
				
				
				<?php if( get_field('descripcion_tecnica') ): ?>
				<div class="technical">
				    <a class="this_close">-</a>
					<h4><?php _e('Descripción Técnica','soccerpro');?></h4>
					<?php the_field('descripcion_tecnica'); ?>
					
				</div>
				<?php endif;?>

			    <?php if( get_field('imagen_secundaria') ): ?>
				<?php 
					$url = get_field('imagen_secundaria') ; $width = 720; $height = 470;
					$crop = true; $retina = true; // Optional. Defaults to 'false'
					$image = matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
					if ( !is_wp_error( $image ) ) { 
					echo '<img alt="" src="'. $image['url'] .'"/>';
					}
 				?>
 				<?php endif;?>
			</div>

		</div>
	</div>
		
</div>

<?php get_footer(); ?>
