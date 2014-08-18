<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */
?>

<div id="sidebar" class="colums medium-4">
			
	<?php

		if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div class="widget-list">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</div>
		<?php endif; ?>

</div>