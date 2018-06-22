jQuery(function($) {


	/* 
	 * *******************************************************************************
	 * FOUNDATION 
	 * *******************************************************************************
	 */
	$(document).foundation();


	/* 
	 * *******************************************************************************
	 * LIBRARY
	 * *******************************************************************************
	 */


		/* CLOCK */	
		function tt_get_date(){

			// get date and create vars for hrs, mins
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();

			// add a leading zero to mins
			if(m<10){
				m = "0"+m;
			}

			// create the clock
			$( '#clock' ).text( h + ":" + m );

			// how often to update the clock
			setTimeout(function(){
				tt_get_date();
			}, 500);
		}


		/* NAVBAR */
		function tt_content_bottom_spacing() {
			var contentBottomSpacing = $( '.navbar' ).outerHeight();
			$('.content').css( 'margin-bottom', contentBottomSpacing );
		}


		/* SLIDER: LARGE */
		function tt_slider_large() {

			// set height
			var heightNavbar = $( '.navbar' ).outerHeight();
			var heightWrapper = $( '.wrapper' ).outerHeight();
			var heightContent = heightWrapper - heightNavbar;
			$( '.page-screensaver .content, .page-screensaver .orbit-container' ).height( heightContent);

			// screensaver - make whole slide clickable
			var slide_link = '';
			$( '.page-screensaver .orbit-slide' ).each(function( slide_link ) {
				slide_link = $(this).find( '.button' ).attr('href');
				$(this).on( 'click touch', function(e) {
					window.location = slide_link;
				});
			});
		}


		/* MAP */
		function tt_map() {

			// set height
			var mapHeight = $( '.map' ).innerHeight();
			$('#map').height( mapHeight );

			// switch order of map and map key around
			// fixes weird bug where the js wouldn't write the list of places to the list items in the map-key.
			$('.map-key').insertAfter('.map');
		}


		/* SCREENSAVER */
		/*Refresh the screensaver content every 15mins */
		function tt_screensaver_refresh() {

			$.ajaxSetup({
	            cache: false,
	            /*beforeSend: function() {
	                $('#content').hide();
	                $('#loading').show();
	            },*/
	            /*complete: function() {
	                $('#loading').hide();
	                $('#content').show();
	            },*/
	            /*success: function() {
	                $('#loading').hide();
	                $('#content').show();
	            }*/
	        });
	        var $container = $( '.page-screensaver #ajax-refresh' );
	        var screensaver_url = window.location.href;
	        var refreshId = setInterval(function() {
	        	$container.load( screensaver_url );
	        }, 900000 );

	    }




	/* 
	 * *******************************************************************************
	 * INIT
	 * *******************************************************************************
	 */
	

		/* 
		 * DOCUMENT READY
		 */
		$(document).ready(function(){

			tt_get_date();
			tt_content_bottom_spacing();
			tt_slider_large();
			tt_map();
			tt_screensaver_refresh();

	    });

});