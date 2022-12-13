( function ( $ ) {
    'use strict';
 
        //***************************
        // FlexSlider Function
        //***************************
        jQuery('.flexslider').flexslider({
            animation: "slide",
            prevText: "<em class='fa fa-angle-left'></em>",
            nextText: "<em class='fa fa-angle-right'></em>",
            start: function(slider) {
                jQuery('body').removeClass('loading');
            }
        });

        //***************************
        // Sticky Header Function
        //***************************
      jQuery(window).scroll(function() {
        'use strict';
          if (jQuery(this).scrollTop() > 100){
            console.log(jQuery(this).scrollTop())  
              jQuery('body').addClass("ec-sticky");
          }
          else{
              jQuery('body').removeClass("ec-sticky");
          }
      });

       

       

        //***************************
        // Owl Carousel
        //***************************
        jQuery('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:11,
		    nav:true,
		    navText: [
                "<i class='fa fa-angle-double-left'></i>",
                "<i class='fa fa-angle-double-right'></i>"
            ],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:6
		        }
		    }
		});
        jQuery('.ec-sponsored').owlCarousel({
            loop:true,
            margin:11,
            nav:true,
            navText: [
                "<i class='fa fa-angle-double-left'></i>",
                "<i class='fa fa-angle-double-right'></i>"
            ],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:6
                }
            }
        });
		jQuery('.ec-nextmatch').owlCarousel({
		    loop:false,
		    margin:0,
		    nav:true,
		    navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
		jQuery('.ec-gallery-slider').owlCarousel({
		    loop:true,
		    margin:15,
		    nav:true,
		    navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
		    responsive:{
		        0:{
		            items:3
		        },
		        600:{
		            items:4
		        },
		        1000:{
		            items:4
		        }
		    }
		});
		jQuery('.ec-twitter-slider').owlCarousel({
		    loop:true,
		    margin:0,
		    nav:true,
		    navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});

        //***************************
        // SearchToggle Function
        //***************************
        jQuery('.ec-search-popup-btn').on("click", function(){
            jQuery('.ec-search-popup').fadeToggle('');
            return false;
        });

        //***************************
        // LoginToggleClass Function
        //***************************
        // jQuery('.ec-modallogin-form p a').on("click", function(){
        //     jQuery('.modal-body').toggleClass('ec-login-toggle');
        //     return false;
        // });

        //***************************
        // Responsive Menu Function
        //***************************
        jQuery(function() {
            jQuery('#as-menu').asmenu();
        });

        //***************************
        // Skills Function
        //***************************
        jQuery('.skillbar').each(function() {
            jQuery(this).appear(function() {
                jQuery(this).find('.count-bar').animate({
                    width:jQuery(this).attr('data-percent')
                },3000);
                var percent = jQuery(this).attr('data-percent');
                jQuery(this).find('.count').html('<span>' + percent + '</span>');
            });
        }); 

} ( jQuery ) )
