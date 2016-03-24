<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage castroytagle
 * @since castroytagle 1.0
 */

get_header(); ?>

<?php if( is_tax() ) {
    global $wp_query;
    $term = $wp_query->get_queried_object();
    $title = $term->name;
    $slug = $term->slug; }?>

<div id="primary" class="content-list <?php echo $slug ?>">
	
	<div id="top-page">
	
		<h1 class="page-title"><?php echo $title ?></h1>

	</div>
	
	<?php include('inc/submenu-filter.php'); ?>

	<div class="content-inner">
	<?php 
		$query = array_merge( $wp_query->query_vars, array( 
		'post_type' => 'soccerproducts', 
		'orderby' => 'menu_order', 
		'posts_per_page' => 20,
		'order' => 'ASC'
		 ));
		
		 query_posts( $query );
	 ?>

		<ul id="products-items">
		
		<?php if (!have_posts() ) : ?>
			<li id="post-0" class="post error404 not-found ">
				<h1 class="entry-title"><?php _e( '', 'soccerpro' ); ?></h1>
				<div class="entry-content no-post">
					<p><?php _e( 'Por el momento no hay productos disponibles en esta categoría.', 'soccerpro' ); ?></p>
				</div>
			</li>
		<?php endif; ?>
		
		<?php //products-items
		   while (have_posts() ) : the_post(); ?>
			<li class="product <?php /*tax*/ $posttags = get_the_terms($post->ID, 'lineas',''); if ($posttags) { foreach($posttags as $tag) { echo $tag->slug . ' ';} } ?>">
			
				<div class="row">

					<div class="text columns medium-3 medium-offset-1">
						<h2 class="product-title"><a class="font-robotoc" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'soccerpro' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to%s', 'soccerpro' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="button radius my-button ">Saber más</a>
					</div>
					
					<div class="img columns medium-7 medium-offset-1">
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'soccerpro' ), the_title_attribute( 'echo=0' ) ); ?>">
						<?php the_post_thumbnail('featured-product'); ?>
						</a>
					</div>

				</div>
			</li>
		
		<?php endwhile; 
			 wp_reset_query(); ?>
		
		</ul>
	</div>

</div>
<?php get_footer(); ?>