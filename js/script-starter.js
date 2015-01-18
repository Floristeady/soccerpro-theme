jQuery(function ($) {
	/************************* 
	Variables
	**************************/
	
	var browserwidth;
	var desktopwidth = 1024; // resolución mínima desktop
	var mobilewidth = 767; // resolución máxima móviles
	
	if (!Modernizr.svg) {
	  $("a.logo img").attr("src", "wp-content/themes/soccerpro-theme/images/elements/logosoccerpro.png");
	  $('img[src$=".svg"]').hide();
	}

	/************************* 
	Functiones
	**************************/
	
	// Obtiene anchura del browser 	
	function getbrowserwidth(){
		browserwidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth || 0;
		//console.log(browserwidth);
		return browserwidth;
	}
	
	function openTechnical() {
		$('#bottom-product a.open').click(function(e) {
			$('.technical').slideDown().css('opacity','1');
			$heightec = $('.technical').outerHeight();
		
			$('#bottom-product .extras').css('height',$heightec);
		});
		
		$('#bottom-product a.this_close').click(function(e) {
			$('.technical').slideUp().css('opacity','0');
			$heightec = $('#bottom-product .extras').height();
			
			$('#bottom-product .extras').css('height',$heightec);
		});
	}
	
	function onLoadAndResize(){ 
		getbrowserwidth();
		galeriaProducto();
		showIcons();
		imgLoadSlider();
		searchShow();
		//$(document).foundation();
		
		if (browserwidth >= mobilewidth) {
			menuDesplegable();
			openTechnical();
		}
		
		if (browserwidth <= mobilewidth) { 
			bottonmobile();
			mainMenu();
			showTechnical();
		}
		
	}
	
	function showTechnical() {
		$('.technical').slideDown().css('opacity','1');
		$('#bottom-product .extras').css('height','inherit');
	}

	function galeriaProducto() {
	  	$('#product-gallery').flexslider({
		     animation: "fade",
		     slideshow: false,
		     directionNav: false,
		     start: function(slider){
		       $('#product-gallery').removeClass('loading');
		     }
		 });
	 }
	   
	 function menuDesplegable() {
		   $("ul#menu-menu-principal").superfish({
		        delay:       100,                     
		        animation:   {opacity:'show',height:'show'},
		        speed:       'fast',                          
		        autoArrows:  false,                            
		        dropShadows: true                            
		        
		    });
	 }
	 
	 function searchShow() {
		 $('.icon_search').click(function(e) {
			$('.search-inner').slideToggle();
		});
	 }
	  
	 function showIcons() { 
		 $('.slider01 .list li a').click(function(e) {
			  e.preventDefault();
			  $(this).siblings('.ico').show().animate({
				  opacity: 1,
			  },200);
			  $(this).siblings('.ico').toggleClass('open');
			  $('.list a').siblings('.ico').not($(this).siblings('.ico')).hide();
			  
			  $(this).parents('ul').find('img.balon').toggleClass('rotate');
		  });
		  
		  $('.slider01 .list li .ico').click(function(e) {
		  	$(this).hide().animate({
				  opacity: 0,
			  });
		  });
	 }
	 
	 function imgLoadSlider(){
	 	 var tmpImg = new Image();
	 	 tmpImg.src = $('img.balon').attr('src') ;
		 tmpImg.onload = function() {
		    $('.slider01 .img').removeClass('loading');
			$('img.balon').animate({
				  opacity: 1,
			  });
			$('.slider01 .back').delay('400').animate({
				  opacity: 1,
			  });
		};
	 }
	 
   function bottonmobile(){
	  $('.open_movil')
	      .bind('click focus', function(){
	        $('#nav-2').slideToggle();
	        $(this).toggleClass('active');
	        $(this).toggleClass('close');
	    }); 
    }
    
    function mainMenu(){
      
      if($('nav#access > div > ul > li').has("ul").length > 0){
	     $('nav#access > div > ul > li .sub-menu').parents('li').addClass('active');
	     
	     $('nav#access > div > ul > li.active')
	      .bind('click focus', function(){
	        
	        $(this).find('.sub-menu').slideToggle();
	        $(this).toggleClass('open');
	        e.preventDefault(); 
	    }); 
	      
      }
      
	    $('.close')
	      .bind('click focus', function(){
	        $('#menu-mobile ul.nav').slideToggle();
	        $(this).toggleClass('active');
	    }); 
    }
		
	/*function galeriaHome() {
	  $('#home-slider').flexslider({
	    animation: "fade",
	    animationLoop: true,
	    controlNav: true,
	    directionNav: false,
	    start: function(slider){
		    $('#home-slider').animate({
			   opacity: 1 
		    });
		    
		    if (!('.flexslider ul.slides li:only-child')){
			    $('.flex-active-slide .text-inner').delay(500).animate({
				   margin: '200px 0 0',
				   opacity: 1 
			    }, 400);
		    } else {
			     $('.slides li .text-inner').delay(500).animate({
				   margin: '200px 0 0',
				   opacity: 1 
			    }, 400);
		    }
	    },
	    after: function(slider) {
		    $('.flex-active-slide .text-inner').delay(500).animate({
			   margin: '200px 0 0',
			   opacity: 1 
		    }, 400);
	    }
	  });
	 }*/


	/************************* 
	Ejecución
	**************************/

	$(window).load(function() {
	   onLoadAndResize();
	
	});

	$(window).resize(function(){
		onLoadAndResize();
	});

});
