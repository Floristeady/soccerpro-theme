<?php
/**
 * The Sidebar containing submenu
 *
 * @package WordPress
 * @subpackage soccerpro
 * @since soccerpro 1.0
 */
?>

<div id="sidebar-menu" class="resize">    
		 <?php $titlepadre = get_the_title();
		 $ancestors = $post->ancestors;
         if(!$post->post_parent){
          // will display the subpages of this top level page
          $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
          
          } else {
          // diplays only the subpages of parent level
          $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");

          if($ancestors) {
 
          $ancestors = end($ancestors); 
          $children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0&sort_order=ASC&link_before=<span>> </span>");
          $titlenamer = get_the_title($post->post_parent);
          
          $tituloDelPapaDelPapa = '';
          if($post->post_parent) {
			$parent = get_post($post->post_parent);
			if ($parent->post_parent){
				$grandpa = get_post($parent->post_parent);
				$titlenamer = get_the_title($grandpa->ID);
				//print "titulo padre es: " . $titlenamer;
			}
			}
          		  
          // you will always get the whole subpages list
          }
      }
          if ($children) { ?>
          <h3> <?php if (!empty($titlenamer)) {echo $titlenamer;} else {print $titlepadre;} ?> </h3>
              <ul>
                  <?php echo $children; ?>
              </ul>
          <?php } ?>
          
  </div>