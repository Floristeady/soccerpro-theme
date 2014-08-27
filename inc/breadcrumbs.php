<nav id="breadcrumbs">
	<div class="row">
		<p><a href="/"> <?php _e('Home', 'soccerpro') ?></a> 
		<span class="separator">/</span> 
		<?php if (is_page()) { ?>
			<?php if($post->post_parent) {
					$parent_title = get_the_title($post->post_parent);
					$parent_url = get_permalink($post->post_parent);
					echo '<a href="'. $parent_url .'" title="Ir a '.$parent_title . ' ">'.$parent_title.'</a><span class="separator"> / </span>';
			} ?> 
			<span style="display:none;" class="current"><?php the_title(); ?></span>
		
		<?php } elseif (is_category() | is_single() ){ ?>
			<a href="<?php echo get_permalink( get_page_by_path( 'novedades' ) ) ?>"> <?php _e('Novedades', 'soccerpro') ?></a><span class="separator"> / </span>
			<?php  echo '<span class="cat">';
			the_category('</span><span class="separator"> / </span><span class="current">');
            if (is_single()) {
                echo '</span><span class="separator"> / </span><span class="current">';
                the_title();
                echo '</span>';
            }  ?>
		<?php } elseif (is_home()) { 
			echo"<span class='current'>"; echo'Novedades </span>';
			
		 } elseif (is_tag()) { 
			echo"<span class='current'>"; printf( __( 'Tag Archives: %s', 'soccerpro' ), single_tag_title( '', false ) ); echo'</span>';
			
		 } elseif (is_month()) {?>
		 	<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) ?>"> <?php _e('Novedades', 'soccerpro') ?></a><span class="separator"> > </span>
			<?php printf( __( 'Monthly Archives: %s', 'soccerpro' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'soccerpro' ) ) );
			
		}	elseif ( is_day() ) {?>
		 	<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) ?>"> <?php _e('Noticias', 'soccerpro') ?></a><span class="separator"> / </span>
			<?php
			printf( __( 'Daily Archives: %s', 'soccerpro' ), get_the_date() );
			
		 } elseif (is_author()) { 
			echo"<span class='current'>"; printf( __( 'All posts by %s', 'soccerpro' ), get_the_author() );  				echo'</span>';
			
		 } elseif (is_search()) { 
			echo"<span class='current'>"; printf( __( 'Search Results for: %s', 'soccerpro' ), get_search_query() ); echo '</span>';
			
		 } else { ?>
		
		<?php  } ?>
		</p>
	</div>
</nav>