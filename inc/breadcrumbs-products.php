<nav id="breadcrumbs">
	<div class="row">
	
	<p><a href="/"> <?php _e('Home') ?></a><span> / </span>
	
	<?php
	global $post;
	$tipo = "";
	$terms = wp_get_post_terms( $post->ID, 'categorias');
	
	foreach ($terms as $term) {
		echo '<a href="' . get_bloginfo('url') . '/?categorias=' . $term->slug . '" >' . $term->name . '</a><span> / </span>';
		$tipo = $term->slug;
		break;
	}
	
	$cities = wp_get_post_terms( $post->ID, 'lineas');
	
	foreach ($cities as $city) {
		echo '<a href="' . get_bloginfo('url') . '/?categorias=' . $tipo . '&lineas='. $city->slug.'" >' . $city->name . '</a><span> / </span>';
		//echo $city->name . ' > ';
		break;
	}
	
	?>
			
	<?php //the_title(); ?>
	
	</p>
	
	</div>
</nav>