( function( $ ) {

	$(document).ready(function($){
		// main slider
		$('.main-slider').slick();

		// latest product slider
		$('.latest-product-items').slick();	

		$('#main-nav').meanmenu({
			meanScreenWidth: "1050",
		});

		// Go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		
		$( window ).scroll(function(){
			if ( $( this ).scrollTop() > 100 ) {
				$scroll_obj.fadeIn();
			} else {
				$scroll_obj.fadeOut();
			}
		});

		$scroll_obj.click(function(){
			$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
			return false;
		});

		//search show and hide
		jQuery(".search-holder .search-box").hide();

		jQuery(".search-btn").click(function(e) {
		          
	        var parent_element = $(this).parent();
	        
	        parent_element.children('.search-holder .search-box').slideToggle();
	       
	        parent_element.toggleClass('open');

	        jQuery(".search-holder .search-btn i").toggleClass('fa-close');

	        e.preventDefault();
		        
		});

	});

} )( jQuery );