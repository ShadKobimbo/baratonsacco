/*
	Author       : Hash Theme.
	Template Name: Paramin - Business Html5 Template
	Version      : 1.0
*/
/*=============================================
Table Of Contents
================================================
	1. PRELOADER JS
	2. JQUERY STICKY MENU
	3. MENU JS
	4. START TESTIMONIAL SLIDER
	5. WHY CHOSE US SLIDER
	5. START CLIENT LOGO
	6. START BLOG SLIDER
	7. START TEAM SLIDER
	8. START COUNTDOWN JS
	9. SECTIONS BACKGROUNDS
	10. START ELEVATEZOOM JS
	11. TOUCHSPIN
	12. ACCORDION JS
	13. START MIXITUP JS
	14. START VENOBOX JS
	15. START WOW ANIMATION JS

Table Of Contents end
 ================================================
 */
(function($) {
    'use strict';

    jQuery(document).on('ready', function() {



        /* 1. PRELOADER JS */

        $(window).on('load', function() {
            $('.loadscreen').fadeOut();
            $('.preloader').delay(350).fadeOut('slow');
        });



        /* 2. JQUERY STICKY MENU */

        $(".sticky-menu").sticky({
            topSpacing: 0
        });

        $('nav#dropdown').meanmenu({
            meanMenuContainer: '.mobile-menu-area',
            meanScreenWidth: "767"
        });


        /* 3. MENU JS */

        $('.mainmenu-area ul.navbar-nav li a').on('click', function(e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1500);
            e.preventDefault();
        });


        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.mainmenu-area').addClass('menu-animation');
                $('.header-3 .logo-area').addClass('menu-animation');
                $('.header-4 .logo-area').addClass('menu-animation');
            } else {
                $('.mainmenu-area').removeClass('menu-animation');
                $('.header-3 .logo-area').removeClass('menu-animation');
                $('.header-4 .logo-area').removeClass('menu-animation');
            }
        });



        /* 4. START SLIDER JS */
		$('.carousel').carousel({
			interval: 5000,
			pause:'false',
		});


        /* 4. START TESTIMONIAL SLIDER */

        $('.client-testimonial').owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: true

        });

        /* 5. WHY CHOSE US SLIDER */

        $('.why-c-sldier').owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true

        });


        /* 5. START CLIENT LOGO */

        $('.client').owlCarousel({
            autoPlay: true, //Set AutoPlay to 3 seconds
            items: 5,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            pagination: false
        });


        /* 5. START IMAGESLIDER */

        $('.imageslider').owlCarousel({
            autoPlay: true, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            pagination: true
        });



        /* 6. START BLOG SLIDER  */

        $('.blog-slider').owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: true
        });



        /* 7. START TEAM SLIDER  */

        $('.team-slider').owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: true
        });

		


        /* 8. START COUNTDOWN JS */

        $('.counter-section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.timer').each(function() {
                    var $this = $(this);
                    $({
                        Counter: 0
                    }).animate({
                        Counter: $this.text()
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
                $(this).unbind('inview');
            }
        });
				   
   
        /* 9. SECTIONS BACKGROUNDS */

        var pageSection = $("div,section");
        pageSection.each(function(indx) {

            if ($(this).attr("data-background")) {
                $(this).css("background-image", "url(" + $(this).data("background") + ")");
            }
        });
		
		
		
	    /* 10. START ELEVATEZOOM JS */	
		
		$('#zoom_01').elevateZoom({
			scrollZoom : true,
			cursor: "crosshair",
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 750
	   }); 
		   
		
				
		 /* 11. TOUCHSPIN */

        $("input[name='demo_vertical']").TouchSpin({
            verticalbuttons: true
        });

		

        /* 12. ACCORDION JS  */

        var selectIds = $('#panel1,#panel2,#panel3');
        $(function($) {
            selectIds.on('show.bs.collapse hidden.bs.collapse', function() {
                $(this).prev().find('.fa').toggleClass('fa-plus fa-minus');
            })
        });
		


		
    });




    /* 13. START MIXITUP JS */

    $('.portfoli-items').mixItUp();



    /* 14. START  VENOBOX JS */

    $('.venobox').venobox({
        numeratio: true,
        titleattr: 'data-title',
        titlePosition: 'bottom',
        spinner: 'wave',
        infinigall: true
    });


    /* 15. START WOW ANIMATION JS */

    new WOW().init();



})(jQuery);