 <div id="share-social" class="show-for-medium-up"> 
       <p>Compartir</p>
       <div class="i_social">
	      <a target="_blank" class="facebook-link" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><span>Facebook</span></a>     
	      <a target="_blank" class="twitter-link" href="http://twitter.com/home?status=Balones Soccerpro: <?php the_title(); ?> - <?php the_permalink(); ?>  vía @soccerpro_mx"><span>Twitter</span></a>
	      <a class="google-link" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
	  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google+</a>
	      <a target="_blank" class="email-link" href="mailto:?subject=Te comparto este producto de Soccerpro!&amp;body=Visita el link para saber más: <?php the_permalink(); ?>" title="Compartir por correo">Email</a>
       </div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=744306015608202&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>