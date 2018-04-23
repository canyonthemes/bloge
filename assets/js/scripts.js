(function($) {
    "use strict";
    jQuery(document).ready(function() {
		 var top_news = jQuery('#main-slider');
			top_news.show().owlCarousel({
				items : 2,
				singleItem : true,
				responsive: true,
				navigation : true,
				navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
<<<<<<< HEAD
			});
=======
			});	
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
			//Submenu Dropdown Toggle
		    if($('.main-menu  li.menu-item-has-children ul').length){
		        $('.main-menu  li.menu-item-has-children').append('<div class="dropdown-btn"><Span class="fa fa-angle-down"></span></div>');
		        //Dropdown Button
		        $('.main-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
		            $(this).prev('ul').slideToggle(500);
		        });
		        //Disable dropdown parent link
		        $('.navigation  li.menu-item-has-children > a').on('click', function(e) {
		            e.preventDefault();
		        });
	    	}
<<<<<<< HEAD
    	    //Click event to scroll to top
    		//Check to see if the window is top if not then display button
			jQuery(window).scroll(function($){
				if (jQuery(this).scrollTop() > 100) {
					jQuery('.scrolltop').addClass('activetop');
					jQuery('.scrolltop').fadeIn();
				} else {
					jQuery('.scrolltop').fadeOut();
				}
			});

			//Click event to scroll to top
			jQuery('.scrolltop').click(function($){
				jQuery('html, body').animate({scrollTop : 0},800);
				return false;
			});

			//fancybox
			jQuery('.fancybox').fancybox();

			//sticky sidebar
		    var at_body = jQuery("body");
		    var at_window = jQuery(window);

	   		if(at_body.hasClass('at-sticky-sidebar')){
	            if(at_body.hasClass('right-s-barr')){
	                jQuery('#secondary, #primary').theiaStickySidebar();
	            }
	            else{
	                jQuery('#secondary, #primary').theiaStickySidebar();
	            }
	        }

	        //set the container that Masonry will be inside of in a var
		    var container = document.querySelector('#masonry-loop');
		    //create empty var msnry
		    var msnry;
		    // initialize Masonry after all images have loaded
		    imagesLoaded( container, function() {
		        msnry = new Masonry( container, {
		            itemSelector: '.masonry-entry'
		        });
		    });

=======
	    	    //Click event to scroll to top
	    		jQuery('#toTop').click(function($){
	    			jQuery('html, body').animate({scrollTop : 0},800);
	    			return false;
	    		});			
				//fancybox
				jQuery('.fancybox').fancybox();			
				//sticky sidebar
		    var at_body = jQuery("body");
		    var at_window = jQuery(window);

	   		if(at_body.hasClass('at-sticky-sidebar')){
	            if(at_body.hasClass('right-s-barr')){
	                jQuery('#secondary, #primary').theiaStickySidebar();
	            }
	            else{
	                jQuery('#secondary, #primary').theiaStickySidebar();
	            }
	        }

	        //set the container that Masonry will be inside of in a var
		    var container = document.querySelector('#masonry-loop');
		    //create empty var msnry
		    var msnry;
		    // initialize Masonry after all images have loaded
		    imagesLoaded( container, function() {
		        msnry = new Masonry( container, {
		            itemSelector: '.masonry-entry'
		        });
		    });
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
    });

})(jQuery);