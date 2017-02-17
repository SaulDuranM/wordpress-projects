/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        //YT API
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        //
        $( ".mediaitem" ).hover(
          function() {
            $( this ).find('.media-item-hover').fadeTo( "fast", 1 );
          }, function() {
            $( this ).find('.media-item-hover').fadeTo( "fast", 0 );
          }
        );
        // SHOW ITEM HOVER
        $( ".showitem" ).hover(
          function() {
            $( this ).find('.show-item-fimage-cover-h').fadeTo( "fast", 1 );
            $( this ).find('.show-item-data-h').fadeTo( "fast", 1 );
          }, function() {
            $( this ).find('.show-item-fimage-cover-h').fadeTo( "fast", 0 );
            $( this ).find('.show-item-data-h').fadeTo( "fast", 0 );
          }
        );

        //MENU MOBILE
        $("#menu-dropdown").toggle(function () {
          $(".main-menu-mobile").slideDown(160);
        }, function () {
          $(".main-menu-mobile").slideUp(160);
        });
        //SUBMENU MOBILE
        $("#down-arrow-btn").toggle(function () {
          $(".detail-subnav-mobile-links").slideDown(160);
        }, function () {
          $(".detail-subnav-mobile-links").slideUp(160);
        });

        ///////////////////////
        //---- BLOG POST ----//
        ///////////////////////
        var sliderp = $("#blog-lastest-posts-slider").lightSlider({
          item: 3,
          autoWidth: false,
          slideMargin: 20,

          addClass: '',
          mode: "slide",
          useCSS: true,
          cssEasing: 'ease-in-out', //'cubic-bezier(0.25, 0, 0.25, 1)',//
          easing: 'linear', //'for jquery animation',////

          speed: 400, //ms'
          auto: false,
          loop: false,
          slideEndAnimation: true,
          pause: 2000,

          keyPress: false,
          controls: true,
          prevHtml: '',
          nextHtml: '',

          rtl:false,
          adaptiveHeight:false,

          vertical:false,
          verticalHeight:500,
          vThumbWidth:100,

          thumbItem:10,
          pager: false,
          gallery: false,
          galleryMargin: 0,
          thumbMargin: 0,
          currentPagerPosition: 'middle',

          enableTouch:true,
          enableDrag:true,
          freeMove:true,
          swipeThreshold: 40,

          responsive : [
            {
              breakpoint:1000,
              settings: {
                item:4,
                slideMove:3
              }
            },
            {
              breakpoint:800,
              settings: {
                item:3,
                slideMove:3
              }
            },
            {
              breakpoint:700,
              settings: {
                item:2,
                slideMove:1
              }
            },
            {
              breakpoint:600,
              settings: {
                item:1,
                slideMove:1
              }
            }
          ]
        });
        ///////////////

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        //SLIDER
        setTimeout(function(){


          var $hslider = $("#home_slider").lightSlider({
            item: 1,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 0,
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////  
            auto:true,
            loop:true,
            slideEndAnimation: false,
            pauseOnHover: true,
            speed: 800,
            pause: 4000,
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
            rtl:false,
            adaptiveHeight:false,

            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,

            thumbItem:10,
            pager: false,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',

            enableTouch:true,
            enableDrag:true,
            freeMove:true,
            swipeThreshold: 40,
            onBeforeSlide: function (el) {
              //console.log("SLIDE END", el);
            },
            onSliderLoad: function(){
              $hslider.refresh();
            } 
          });
        }, 3000);
        

        // SCHEDULE SLIDER
        var slider = $(".today-schedule-slider").lightSlider({
          item: 5,
          autoWidth: false,
          slideMargin: 0,

          addClass: '',
          mode: "slide",
          useCSS: true,
          cssEasing: 'ease-in-out', //'cubic-bezier(0.25, 0, 0.25, 1)',//
          easing: 'linear', //'for jquery animation',////

          speed: 600, //ms'
          auto: true,
          loop: true,
          slideEndAnimation: true,
          pause: 4000,

          keyPress: false,
          controls: false,
          prevHtml: '',
          nextHtml: '',

          rtl:false,
          adaptiveHeight:false,

          vertical:false,
          verticalHeight:500,
          vThumbWidth:100,

          thumbItem:10,
          pager: false,
          gallery: false,
          galleryMargin: 0,
          thumbMargin: 0,
          currentPagerPosition: 'middle',

          enableTouch:true,
          enableDrag:true,
          freeMove:true,
          swipeThreshold: 40,

          responsive : [
            {
              breakpoint:1000,
              settings: {
                item:4,
                slideMove:3
              }
            },
            {
              breakpoint:800,
              settings: {
                item:3,
                slideMove:3
              }
            },
            {
              breakpoint:700,
              settings: {
                item:2,
                slideMove:1
              }
            },
            {
              breakpoint:600,
              settings: {
                item:1,
                slideMove:1
              }
            }
          ]
        });

        
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    'donate': {
      init: function() {
        
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
