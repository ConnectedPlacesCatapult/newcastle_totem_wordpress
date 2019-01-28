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


		/* NAVBAR 
		 * Adds bottom padding to .content so that content doesn't go underneath navbar
		 */
		function tt_content_bottom_spacing() {
			var contentBottomSpacing = $( '.navbar' ).outerHeight();
			$('.content').css( 'padding-bottom', contentBottomSpacing );
		}


		/* SLIDER: LARGE */
		function tt_slider_large() {

			/* Set the height of the slides to make them fullscreen */
			var slide_height = $( '.orbit-container' ).outerHeight();
			$( '.orbit-slide' ).height(slide_height);
		}


		/* COMPONENT: CLICKABLE */
		function tt_component_click() {

			var row_link = '';
			$( '.page-screensaver .orbit-slide, .home .row' ).each(function( row_link ) {
				row_link = $(this).find( 'a' ).attr('href');
				$(this).on( 'click touch', function(e) {
					window.location = row_link;
				});
			});

		}


		/* MAP */
		function tt_map() {

			// switch order of map and map key around
			// fixes weird bug where the js wouldn't write the list of places to the list items in the map-key.
			$('.map-key').insertAfter('.map');
		}


		/* SCREENSAVER */
		function tt_screensaver_refresh() {

			if( $( 'body' ).hasClass( 'page-screensaver' ) ) {

				/* Refresh the screensaver content every 15mins */

					// get the current time
					var time = new Date().getTime();

					// reset var "time" every time a user interacts with the screensaver
					$(document.body).bind( 'swipe click', function () {
						time = new Date().getTime();
					});

					// recheck var "time" every 15 mins
					// if the current time is 15 mins later than the last time var "time" was updated then reload the page
					setInterval(function() {

						if (new Date().getTime() - time > 900000) { // time frame to compare var "time" against
							window.location.href = window.location.href;
						}

					}, 900000); // frequency to compare time
			}
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
			tt_component_click();
			tt_map();
			tt_screensaver_refresh();

	    });

});