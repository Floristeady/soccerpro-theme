/*
	Any site-specific scripts you might have.
*/

jQuery(window).load(function() {
	  /*jQuery('#home-slider').flexslider({
	    animation: "fade",
	    animationLoop: true,
	    controlNav: true,
	    directionNav: false,
	    start: function(slider){
		    jQuery('#home-slider').animate({
			   opacity: 1 
		    });
		    
		    if (!('.flexslider ul.slides li:only-child')){
			    jQuery('.flex-active-slide .text-inner').delay(500).animate({
				   margin: '200px 0 0',
				   opacity: 1 
			    }, 400);
		    } else {
			     jQuery('.slides li .text-inner').delay(500).animate({
				   margin: '200px 0 0',
				   opacity: 1 
			    }, 400);
		    }
	    },
	    after: function(slider) {
		    jQuery('.flex-active-slide .text-inner').delay(500).animate({
			   margin: '200px 0 0',
			   opacity: 1 
		    }, 400);
	    }
	  });*/
	  
	  jQuery('#product-gallery').flexslider({
		     animation: "fade",
		     slideshow: false,
		     directionNav: false,
		     start: function(slider){
		       $('#product-gallery div').removeClass('loading');
		     }
	  });
	  
});

/* Iniciando Superfish para menu desplegable */
jQuery(document).ready(function(){ 
    /*jQuery("ul#menu-menu-principal").superfish({
        delay:       100,                            // one second delay on mouseout 
        animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
        speed:       'fast',                          // faster animation speed 
        autoArrows:  false,                           // disable generation of arrow mark-up 
        dropShadows: true                            // disable drop shadows 
        
    });*/ 
    
    jQuery('.page-list-grey').parents('#main-inner').css( "background-color", "#414042" );
    
          
	jQuery('.open-modal a').click(function(e) {
		jQuery('#box-contact').foundation('reveal', 'open');
	});
	
	var $findError = $('#box-contact').find('.wpcf7-response-output');
	if ( $findError.hasClass('wpcf7-validation-errors')){
		$('#box-contact').foundation('reveal', 'open');
	} else if ( $findError.hasClass('wpcf7-mail-sent-ok')) {
		$('#box-contact').foundation('reveal', 'open');
		$('#box-contact').find('.entry-content .row').hide();
	}
	   
});



