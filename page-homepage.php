<?php
/**
 * Template Name: P&aacute;gina de inicio
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<div id="home-slider" class="flexslider">
			<ul class="slides">
				<?php include('inc/home01.php') ?>
			</ul>
		</div>
	
		<?php  $rows = get_field('destacados_inicio');  ?>
		<?php if($rows) { ?>
		<div id="featured-products">
			<?php echo '<ul class="slides">';
					foreach($rows as $row) { ?>
						<li class="<?php echo $row['opcion_fondo']; ?>">
						   <div class="over">
							<div class="row inner">
									<div class="img medium-7 columns">
									   										
										<?php if($row['imagen_destacado']) { ?>
										<?php if($row['link_contenido']) { echo '<a title="'.$row['subtitulo_destacado'].'" href="'. $row['link_contenido'].'"><img src="'. $row['imagen_destacado'].'" alt="'.$row['subtitulo_destacado'].'" /></a>'; } else { echo '<img src="'. $row['imagen_destacado'].'" alt="'.$row['subtitulo_destacado'].'" />';} ?></h2>
										<?php } ?>

									</div>
									<div class="text medium-5 columns">
									
									   <?php if($row['titulo_destacado']) {?>
										<h2><?php if($row['link_contenido']) { echo '<a title="" href="'. $row['link_contenido'].'">'. $row['titulo_destacado'].'</a>'; } else { echo $row['titulo_destacado'];} ?></h2>
										<?php } ?>
										
										 <?php if($row['subtitulo_destacado']) {?>
										<h3><?php echo $row['subtitulo_destacado']?></h3>
										<?php } ?>
										 <?php if($row['texto_descriptivo_destacado']) {?>
										<p><?php echo $row['texto_descriptivo_destacado']?></p>
										<?php } ?>
										 <?php if($row['link_contenido']) {?>
										<a href="<?php echo $row['link_contenido']?>" class="my-button  button">Saber más</a>
										<?php } ?>
									</div>
									
								</div>
							</div>
							<div class="back op<?php echo $row['selecionar_imagen_completa']; ?>" style="background-color:<?php echo $row['color_fondo_destacado'] ?>;">
							        <?php if($row['imagen_fondo_destacado']) {?>
									<img alt="fondo" src="<?php echo $row['imagen_fondo_destacado']?>"/>
									<?php } ?>
							</div>
							
						</li>
				
			<?php } echo '</ul>'; ?>
		</div>
		<?php } ?>
		
		
		<div id="featured-info">
			
			<div class="row">
				<div class="columns medium-7 medium-centered">
				
				   <?php if( get_field('info_texto_principal') ) { 
		           if( get_field('info_link') ) { 
		           		echo '<h3><a title="" href="'; the_field('info_link'); echo '">'; the_field('info_texto_principal'); echo '</a></h3>';  } else  { echo '<h3>'; the_field('info_texto_principal'); echo'</h3>'; }  
				   } ?>
				   
					<?php if( get_field('info_texto_secundario') ){ ?>
					<h5><?php the_field('info_texto_secundario'); ?></h5>
					<?php } ?>
					
					<?php if( get_field('info_link') ){ ?>
					<a title="" href="<?php the_field('info_link'); ?>" class="button my-button ">Leer más</a>	  				 <?php } ?>
					
				</div>
			</div>
			
		</div><!-- #featured-info -->
		
		<?php  $rows = get_field('contenidos_inicio');  ?>
		<?php if($rows) { ?>
		<div id="featured-content">
		<?php echo '<ul class="slides">';
					foreach($rows as $row) { ?>
					<li class="<?php echo $row['texto_opcion']; ?> <?php echo $row['imagen_opcion']; ?>" style="background-color:<?php echo $row['color_secundario'] ?>; background-image:url(<?php echo $row['imagen_contsecundario'] ?>);">
					
					<div class="large-7 columns">
						<div class="inner">
							<?php if($row['titulo_secundario']) {?>
							<h4><?php if($row['link_secundario']) { echo '<a title="" href="'. $row['link_secundario'].'">'. $row['titulo_secundario'].'</a>'; } else { echo $row['titulo_secundario'];} ?></h4>
							<?php } ?>
							
							 <?php if($row['texto_secundario']) {?>
							 <p><?php echo $row['texto_secundario']?></p>
							<?php } ?>
							
							<?php if($row['link_secundario']) {?>
							 <a href="<?php echo $row['link_secundario']?>" class="my-button  button"><?php echo $row['texto_boton_secundario']?></a>
							<?php } ?>
						</div>
					</div>
						
					</li>
					<?php } echo '</ul>'; ?>
		</div>
		<?php } ?>
		
		
		<?php  $rows = get_field('datos_clientes');  ?>
		<?php if($rows) { ?>
		<div id="clients">
			<div class="row">
				<h3>Nuestros <span></span> Clientes</h3>
				
				<?php echo '<ul class="slides">';
					foreach($rows as $row) { ?>
					<li class="<?php if(!$row['logotipo_cliente']) { echo 'no-image'; }?>">
						<?php 
							$url = $row['logotipo_cliente']; $width = 150; $height = 150;
							$crop = true; $retina = false; // Optional. Defaults to 'false'
							$image = matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
							if ( !is_wp_error( $image ) ) { 
							echo '<div class="img"><img class="grayscale" alt="" src="'. $image['url'] .'"/></div>';
							}
		 				?>
		 				
		 				<?php if($row['nombre_cliente']) {?>
						<p><?php echo $row['nombre_cliente']?></p>
						<?php } ?>

					</li>
					
				<?php } echo '</ul>'; ?>
			</div>
			
		</div>
		<?php } ?>
		

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>