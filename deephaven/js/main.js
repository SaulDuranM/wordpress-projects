
jQuery(document).ready(function($) {
	var h = $(window).height() * 0.8;

	$('#home').css({'height':(h+'px')});
	$('#home_0').css({'height':(h+'px')});

	$('.featured-slider_home').css({'height':(h+'px')});


	$(window).resize(function(){
		var h = $(window).height() * 0.8;
		$('#home').css({'height':(h+'px')});
		$('#home_0').css({'height':(h+'px')});
		$('.featured-slider_home').css({'height':(h+'px')});
		
	});

	//PARALLAX Effect Image Home Hero
	
	$('#home_0').parallax("50%", 0.2);
	$('.featured-slider_home #featured_slider_box_home').iosSlider({
		snapToChildren: true,
		desktopClickDrag: false,
		navPrevSelector: '.featured-slider_home .prev',
		navNextSelector: '.featured-slider_home .next',
	});

	//FEATURE Sliders
	$('.featured-slider_news #featured_slider_box').iosSlider({
		snapToChildren: true,
		desktopClickDrag: false,
		navPrevSelector: '.featured-slider_news .prev',
		navNextSelector: ' .featured-slider_news .next',
	});
	$('.featured-slider_spot #featured_slider_box').iosSlider({
		snapToChildren: true,
		desktopClickDrag: false,
		navPrevSelector: '.featured-slider_spot .prev',
		navNextSelector: '.featured-slider_spot .next',
	});

	//PRODUCTS LIGHTBOX

	$('#product-button_2').click(function(e){
         var delay = 0;
         if($.magnificPopup.open){
            $.magnificPopup.close();
            delay = 300;
         }
         // Start lightbox
         setTimeout(function(){
            $.magnificPopup.open({
                  midClick: true,
                  removalDelay: 300,
                  items: {
                    src: '#product-det-2', 
                    type: 'inline'
                  },
                  showCloseBtn: false
            });
          }, delay);
        e.preventDefault();
    });
    $('#product-button_1').click(function(e){
         var delay = 0;
         if($.magnificPopup.open){
            $.magnificPopup.close();
            delay = 300;
         }
         // Start lightbox
         setTimeout(function(){
            $.magnificPopup.open({
                  midClick: true,
                  removalDelay: 300,
                  items: {
                    src: '#product-det-1', 
                    type: 'inline'
                  },
                  showCloseBtn: false
            });
          }, delay);
        e.preventDefault();
    });
    $('#product-button_3').click(function(e){
         var delay = 0;
         if($.magnificPopup.open){
            $.magnificPopup.close();
            delay = 300;
         }
         // Start lightbox
         setTimeout(function(){
            $.magnificPopup.open({
                  midClick: true,
                  removalDelay: 300,
                  items: {
                    src: '#product-det-3', 
                    type: 'inline'
                  },
                  showCloseBtn: false
            });
          }, delay);
        e.preventDefault();
    });
    //CLOSE POPUP
    $('.product-detail-close').click(function(e){
      $.magnificPopup.close();
    });
    
});