<li class="slider01" <?php if( get_field('color_fondo_slider') ) { ?>style="background-color:<?php the_field('color_fondo_slider') ?>;"<?php }?>>
	<div class="text row">
	
		<div class="columns medium-10 small-centered">
		    <?php if( get_field('titulo_slider') ) { ?>
			<h1><?php the_field('titulo_slider'); ?></h1>
			<?php } ?>
			<?php if( get_field('subtitulo_slider') ) { ?>
			<h2><?php the_field('subtitulo_slider'); ?></h2>
			<?php } ?>
			<a title="<?php the_field('titulo_slider'); ?>" class="button my-button" href="<?php the_field('link_slider'); ?>">Saber más</a>
		</div>
		
		<?php if( get_field('imagen_small_slider') ) { ?>
		<div class="img-small small-12 small-centered show-for-small-only">
		 	<img src="<?php the_field('imagen_small_slider'); ?>" alt="<?php the_field('titulo_slider'); ?>">
		</div>
		<?php } ?>
		
		<?php if( get_field('codigo_custom_slider') == 'custom' ) { ?>
		<div class="img large-11 small-centered show-for-medium-up loading">
			
			<div class="spinner">
			  <div class="dot1"></div>
			  <div class="dot2"></div>
			</div>
			
			<ul class="list simple">
				<li class="e1"> <div>Circunferencia<br> constante</div> 
					<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico01.png" alt="ico01" /></span></li>
				
				<li class="e2"><div>Redondez<br> permanente</div> 
				<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico02.png" alt="ico02" /></span></li>
				
				<li class="e3"><div>Perdida mínima <br>de presión</div> 
				<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico03.png" alt="ico03" /></span></li>
				
				<li class="e4"><div>Rebote <br>uniforme</div> 
				<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico04.png" alt="ico04" /></span></li>
				
				<li class="e5"><div>Conservación de <br> forma y tamaño </div> 
				<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico05.png" alt="ico05" /></li>
				
				<li class="e6"><div>Mínima <br>absorción<br> de agua </div> 
				<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico06.png" alt="ico06" /></li>
				
				<li class="e7"><div>Peso <br>perfecto</div> 
				<a class="plus" href="#"><span>+</span></a><span class="ico"><img src="<?php bloginfo('template_url')?>/images/test/ico07.png" alt="ico07" /></li>
			</ul>
			<img class="balon anima" src="<?php bloginfo('template_url')?>/images/test/balonslider.png" alt="balonslider" width="494" height="445" />
		</div>
		<?php } else { ?>
		   <?php if( get_field('imagen_completa_slider') ) { ?>
		   	<div class="spinner">
			  <div class="dot1"></div>
			  <div class="dot2"></div>
			</div>
		   
			<div class="img-big small-12 small-centered show-for-medium-up loading">
			 	<img src="<?php the_field('imagen_completa_slider'); ?>" alt="<?php the_field('titulo_slider'); ?>">
			</div>
			<?php } ?>
		<?php } ?>
		
	</div>
	
	<?php if( get_field('codigo_custom_slider') == 'custom' ) { ?>
	<div class="back show-for-large-up">
		<img src="<?php bloginfo('template_url')?>/images/test/balonfondo.png" alt="balonfondo" />
	</div>
	<?php } ?>
</li>