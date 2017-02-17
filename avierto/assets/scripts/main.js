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
  var Sage = {
    // All pages
    'common': {
      init: function() {
        //VARS
        var h_Window = $(window).height();
        var w_Window = $(window).width();
        var s_Menu = 0;

        function setMargin() {
          var hfooter = $( "footer" ).height();
          $('main.content').css('margin-bottom', hfooter);
        }

        // PRELOADER
        $.fn.preload = function (callback) {
          var length = this.length;
          var iterator = 0;
          return this.each(function () {
            var self = this;
            var tmp = new Image();
            if (callback){
              tmp.onload = function () {
                callback.call(self, 100 * ++iterator / length, iterator === length);
              };
            }  
            tmp.src = this.src;
          });
        };
        $('img').preload(function(perc, done) {
          $('.counter').html(Math.round(perc)+'%');
          //console.log(perc);
        });
        
        /////

        $(document).ready(function(){
          setMargin();
          $(window).resize(setMargin);
          //PREloader circle
          //$('.grid-loader').fadeTo(1000,1, function() {});
          $('.grid-loader').addClass('grid-loader-show');
        });
        //       
        $(window).load(function() {
          $(".grid-loader-container").animate({
            top: h_Window
          }, 1400, "easeInOutQuint", function() {
            $(this).css("z-index",0);
            $(this).css("top", -(h_Window + 600));
          });
          $('.grid-loader').removeClass('grid-loader-show');
          $('.grid-loader').addClass('grid-loader-hide');
        });


        /// LOGO HOME & MENU ///
        $(document).on('scroll', function (e){
          var docScroll = $(document).scrollTop();
          fadeElement = $('.logo-head');
          fadeElement.css({
            'opacity' : 1-(docScroll/300)
          });
          if($(window).scrollTop() >50){
            fadeElement.css({
              'top' : '40%'
            });
          } else if($(window).scrollTop() < (h_Window + 200)){
            fadeElement.css({
              'top' : '50%'
            });
          }
          /// MENU ///
          if ($(window).scrollTop() >= h_Window) {
            $(".open-overlay-menu").addClass("overlay-menu-fixed");
          } else {
            $(".open-overlay-menu").removeClass("overlay-menu-fixed");
          }
          if ($(window).scrollTop() >= h_Window + 350) {
            $(".filtros-sec-mural").addClass( "filtros-fixed" );
          } else {
            $(".filtros-sec-mural").removeClass( "filtros-fixed" );
          }
          console.log("scroll");
          var hfooter_bottom = $( "footer" ).height();

          if ($(window).scrollTop() + $(window).height() > $(document).height() - hfooter_bottom - 50) {
            $( "footer" ).css("opacity", "1");
          } else {
            $( "footer" ).css("opacity", "0");
          }
        });

        /// HELPERS ///
        function classReg( className ) {
          return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
        }
        var hasClass, addClass, removeClass;
        if ( 'classList' in document.documentElement ) {
          hasClass = function( elem, c ) {
            return elem.classList.contains( c );
          };
          addClass = function( elem, c ) {
            elem.classList.add( c );
          };
          removeClass = function( elem, c ) {
            elem.classList.remove( c );
          };
        } else {
          hasClass = function( elem, c ) {
            return classReg( c ).test( elem.className );
          };
          addClass = function( elem, c ) {
            if ( !hasClass( elem, c ) ) {
              elem.className = elem.className + ' ' + c;
            }
          };
          removeClass = function( elem, c ) {
            elem.className = elem.className.replace( classReg( c ), ' ' );
          };
        }
        function toggleClass( elem, c ) {
          var fn = hasClass( elem, c ) ? removeClass : addClass;
          fn( elem, c );
        }
        var classie = {
          hasClass: hasClass,
          addClass: addClass,
          removeClass: removeClass,
          toggleClass: toggleClass,
          has: hasClass,
          add: addClass,
          remove: removeClass,
          toggle: toggleClass
        };
        if ( typeof define === 'function' && define.amd ) {
          define( classie );
        } else {
          window.classie = classie;
        }

        ///SCROLL
        var body = $('body');
        $('.overlay-scale, .grid-loader-container, .open-overlay-menu').on({
          'mousewheel': function(e) {
            if (e.body) {return;}
            e.preventDefault();
            e.stopPropagation();
          }
        });
        /// OVERLAY MENU ///
        var triggerBttn = document.getElementById( 'trigger-overlay' ),
          overlay = document.querySelector( 'div.overlay' ),
          transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
          },
          transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
          support = { transitions : Modernizr.csstransitions },
          menuGlobal = document.querySelector( 'div.open-overlay-menu' );
        
        function toggleOverlay() {
          if( classie.has( overlay, 'open' ) ) {
            classie.remove( overlay, 'open' );
            classie.add( overlay, 'close' );
            classie.remove( menuGlobal, 'menu-global-on-overlay' );
            var onEndTransitionFn = function( ev ) {
              if( support.transitions ) {
                if( ev.propertyName !== 'visibility' ) {
                  return;
                }
                this.removeEventListener( transEndEventName, onEndTransitionFn );
              }
              classie.remove( overlay, 'close' );
            };
            if( support.transitions ) {
              overlay.addEventListener( transEndEventName, onEndTransitionFn );
            } else {
              onEndTransitionFn();
            }
          } else if( !classie.has( overlay, 'close' ) ) {
            classie.add( overlay, 'open' );
            classie.add( menuGlobal, 'menu-global-on-overlay' );
          }
          console.log('menu');
        }
        triggerBttn.addEventListener( 'click', toggleOverlay );

        $(".home_content").click(toggleOverlay);

        /// MENU ALEATORIO ///
        var images = ['img-1.jpg', 'img-2.jpg', 'img-escalera.jpg', 'img-estacionamiento.jpg', 'img-fachada.jpg', 'img-pasillo.jpg', 'img-reja.jpg', 'img-rest-1.jpg', 'img-rest-s-1.jpg', 'img-slide-1.jpg', 'img-slide-3.jpg'];
        $(".menu-btn").add(".home_content").click(function() {
          if ($(".overlay-scale").hasClass("open") ) {
            $(".menu-btn").addClass("menu-btn-open");
            $(".avierto-main-container").css({'background-image': 'url(../wp-content/themes/avierto/dist/images/somos/' + images[Math.floor(Math.random() *      images.length)] + ')'});
            $(".avierto-main-container").css("background-size", "cover"); 
          } else {
            $(".menu-btn").removeClass("menu-btn-open");
          }
        });

        // first link ---------
        $('#first-link').hover(function(){     
          $('#second-link').addClass('light-link-menu');
        }, function(){    
          $('#second-link').removeClass('light-link-menu');
        });
        // second link ---------
        $('#second-link').hover(function(){     
          $('#first-link').addClass('light-link-menu');
        }, function(){    
          $('#first-link').removeClass('light-link-menu');
        });


        ////INSTAGRAM
        $.ajax( {
          url: 'https://api.instagram.com/v1/users/2903044278/media/recent/?access_token=2903044278.1677ed0.e133af5bd8a540cc8c229bf9080d7f24',
          //url: 'https://api.instagram.com/v1/users/5773172/media/recent/?access_token=18360510.5b9e1e6.de870cc4d5344ffeaae178542029e98b',
          type: 'GET',
          dataType: "jsonp",
          success: function( response ) {
            //ADD images
            var im = 0;
            $.each(response.data, function( index, value ) {
              if(im < 8){
                $('.insta-avierto').find('.insta-content').append('<div class="col-xs-1"><a href="'+value.link+'" target="_blank"><img class="img-responsive" src="'+value.images.standard_resolution.url+'"></a></div>');
              }
              im++;
          
              console.log('instagram');
            });
          },
          error : function(error) {
            console.log("Error Course-->",error);
          }
        });

        // MENU PRELOADER
        $("#first-link").click(function(e){
          e.preventDefault();
          var secc = $(this).attr("href");
          $(".grid-loader-container").css("z-index","99999999999999");
          $( ".grid-loader-container" ).delay(300).animate({
            top: 0
          }, 1300, "easeInOutQuint", function() {
            window.location = secc;
          });
        });
        $(".folink").click(function(e){
          e.preventDefault();
          var secc = $(this).attr("href");
          $(".grid-loader-container").css("z-index","99999999999999");
          $( ".grid-loader-container" ).delay(300).animate({
            top: 0
          }, 1300, "easeInOutQuint", function() {
            window.location = secc;
          });
        });
        $(".menu-ov").click(function(e){
          e.preventDefault();
          var secc = $(this).attr("href");
          //CLOSE MENU
          toggleOverlay();
          $(".menu-btn").removeClass("menu-btn-open");
          //
          $(".grid-loader-container").css("z-index","99999999999999");
          $( ".grid-loader-container" ).delay(1100).animate({
            top: 0
          }, 1300, "easeInOutQuint", function() {
            window.location = secc;
          });
        });

      },
      finalize: function() {

      }
    },
    // HOME
    'home': {
      init: function() {
        $('.avierto-main-container').addClass("back-transparent");
        //Preloader
        $(".grid-loader-container-home").show();
        var percentLoaded = 0;
        var times = 0;
        var videoElement = document.getElementById("bgvid");
        //
        function updateLoadingStatus(){
          if(times < 10){
            console.log('percentLoaded--->',percentLoaded);
            $(".grid-loader-container-home").find('.grid-loader').removeClass('grid-loader-hide');
            $(".grid-loader-container-home").find('.grid-loader').addClass('grid-loader-show');
            setTimeout(function(){
              percentLoaded = parseInt(((times / videoElement.duration) * 100));
              $('.counter').html(percentLoaded+'%');
              updateLoadingStatus();
            }, 400);
            times++;
          } else {
            $(".grid-loader-container-home").animate({
              top: $(window).height()
            }, 1400, "easeInOutQuint", function() {
              $(this).css("z-index",0);
              $(this).css("top", -($(window).height() + 600));
            });
            videoElement.play();
          }
        }
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          $(".grid-loader-container-home").hide();
        } else {
          $(".grid-loader-container-home").find('.grid-loader').addClass('grid-loader-hide');
          $(".grid-loader-container-home").find('.grid-loader').removeClass('grid-loader-show');
          updateLoadingStatus();
        }
        


      },
      finalize: function() {

      }
    },
    // SOMOS
    'somos': {
      init: function() {
        /// MENU CURRENT
        $(".avierto-main-container div:first-child").addClass("current");
        $('.somos-carousel').carousel({
          interval: 5000,
          cycle: true,
          pause: false,
        });
      }
    },
    // ACTIVIDADES
    'actividades': {
      init: function() {
        /// MENU CURRENT
        $(".avierto-main-container div:nth-child(3)").addClass("current");
        ///
        var panelAct = document.getElementById( 'accordion-actividades' ),
            mainContainer = document.querySelector( 'main.sec-actividades' ),
            headingAct = document.querySelector( 'div.heading-actividades'),
            panelStyle = document.querySelector( 'div.style-actividades');
            panelTitle = document.querySelector( '.panel-title');

        //INICIO
        $('body').css("background-color", "transparent");
        $(mainContainer).css("background", "transparent");
        $('#accordion-actividades').find( '#Teatro').addClass( "img_act_in_back" );
        $('.panelActividad .panel-body').css("color", "#fff");
        $('.texto-align-actividades').css("color", "#fff");
        $('.panelActividad').addClass("act-dis-color");
        var actAct = "Teatro";

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          $('.panelActividad').click(function(){
            //GET BACKGROUND
            bck = $(this).data('back');
            $('#accordion-actividades').find( '#' + bck ).addClass( "img_act_in_back" );
            $(mainContainer).css("background", "transparent");
            $('.panelActividad').addClass("act-dis-color");
            $('.panelActividad .panel-body').css("color", "#fff");
            $('.texto-align-actividades').css("color", "#fff");
            $(this).addClass("act-select-color");
          });
        } else {
          $('.panelActividad').hover(function(){
            //GET BACKGROUND
            bck = $(this).data('back');
            $('#accordion-actividades').find( '#' + actAct ).removeClass( "img_act_in_back" );
            $('#accordion-actividades').find( '#' + bck ).addClass( "img_act_in_back" );
            actAct = bck;
            $(mainContainer).css("background", "transparent");
            $('.panelActividad').addClass("act-dis-color");
            $('.panelActividad .panel-body').css("color", "#fff");
            $('.texto-align-actividades').css("color", "#fff");
            $(this).addClass("act-select-color");
          }).mouseleave(function(){
            ///////////////////////
          });
        }
      }
    },

    // MURAL
    'mural': {
      init: function() {
        /// MENU CURRENT
        $(".avierto-main-container div:nth-child(4)").addClass("current");
        $(".filter").click(function(){
          var filtro = $(this).data("filter");
          if(filtro === "filtro-all"){
            $(".items-filter li").each(function( index ) {
              $(this).removeClass("off");
              $(this).addClass("on");
            });
          } else {
            $(".images-sec-mural .items-filter li").each(function( index ) {
              $(this).removeClass("on");
              $(this).addClass("off");
              if($(this).hasClass(filtro)){
                $(this).removeClass("off");
                $(this).addClass("on");
              }
            });
          }
          console.log('filtros');
        });
      }
    },
    // COMUNIDAD
    'comunidad': {
      init: function() {
        /// MENU CURRENT
         $(".avierto-main-container div:nth-child(5)").addClass("current");
      }
    },
    // PROMOCIONES
    'promociones': {
      init: function() {
        /// MENU CURRENT
        $(".avierto-main-container div:last-child").addClass("current");
        (function() {
          [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
            if( inputEl.value.trim() !== '' ) {
              classie.add( inputEl.parentNode, 'input--filled' );
            }
            // events:
            inputEl.addEventListener( 'focus', onInputFocus );
            inputEl.addEventListener( 'blur', onInputBlur );
          });
          function onInputFocus( ev ) {
            classie.add( ev.target.parentNode, 'input--filled' );
          }
          function onInputBlur( ev ) {
            if( ev.target.value.trim() === '' ) {
              classie.remove( ev.target.parentNode, 'input--filled' );
            }
          }
        })();
        $("#promosCarousel").carousel({
          interval: false,
          pause: "hover"
        });
        $("#promos").click(function(){
          $('#response').fadeTo(600, 0);
          var url = 'http://avierto.com.mx/gravityformsapi/forms/3/submissions';
          var inputValues = {
            input_2: $("#input-11").val(),
            input_1: $("#input-10").val()
          };
          var data = {
            input_values: inputValues
          };
          $.ajax({
            url: url,
            type: 'POST',
            data: JSON.stringify(data),
            beforeSend: function (xhr, opts) {}
          }).done(function (data, textStatus, xhr) {
            var response = JSON.stringify(data.response, null, '\t');
            //console.log(data.response.is_valid);
            if(data.response.is_valid){
              console.log(response.confirmation_message);
              $('#response').html('');
              $('#response').html(data.response.confirmation_message);
              $('#response').fadeTo(600, 1);
              $("#input-11").val('');
              $("#input-10").val('');
            } else {
              $('#response').html('Ingresa las promociones que te gustaría tener y tu correo electrónico');
              $('#response').fadeTo(600, 1);
            }
            //console.log(response);

          });
          return(false);
        });
      }
    },
    // CONTACTO
    'contacto': {
      init: function() {
        $("#button-blue").click(function(){
          console.log("Contacto");
          $('#response').fadeTo(600, 0);
          var url = 'http://avierto.com.mx/gravityformsapi/forms/2/submissions';
          var inputValues = {
            input_1: $("#userName").val(),
            input_2: $("#userEmail").val(),
            input_5: $("#userPhone").val(),
            input_4: $("#userMesage").val()
          };
          var data = {
            input_values: inputValues
          };
          $.ajax({
            url: url,
            type: 'POST',
            data: JSON.stringify(data),
            beforeSend: function (xhr, opts) {}
          }).done(function (data, textStatus, xhr) {
            var response = JSON.stringify(data.response, null, '\t');
            //console.log(data.response.is_valid);
            if(data.response.is_valid){
              console.log(response.confirmation_message);
              $('#response').html('');
              $('#response').html(data.response.confirmation_message);
              $('#response').fadeTo(600, 1);
              $("#input-11").val('');
              $("#input-10").val('');
            } else {
              $('#response').html('Ingresa tus datos');
              $('#response').fadeTo(600, 1);
            }
          });
          return(false);
        });
      }
    },
    'futbol': {
      init: function() {
        $(".avierto-main-container div:nth-child(2)").addClass("current");
        $( ".futbol" ).find( ".carousel" ).addClass( "no-autoplay" );
        $('.no-autoplay').carousel({
          interval: false
        });
        $('.scroll-futbol a[href^="#"]').on('click',function (e) {
          e.preventDefault();
          var target = this.hash;
          var $target = $(target);
          $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 85
          }, 900, 'swing', function () {
            //window.location.hash = target;
          });
        });
        //$.getJSON("https://api.instagram.com/v1/users/9187952/media/recent/?access_token=18360510.5b9e1e6.de870cc4d5344ffeaae178542029e98b", function(data){ console.log(data); });
        


      }
    }
    // OTROS


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
