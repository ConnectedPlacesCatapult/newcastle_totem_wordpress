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


		/* SCREENSAVER */
		function tt_slider_large() {

			var heightNavbar = $( '.navbar' ).outerHeight();
			//console.log(heightNavbar);

			var heightWrapper = $( '.wrapper' ).outerHeight();
			//onsole.log(heightWrapper);

			var heightContent = heightWrapper - heightNavbar;
			$( '.page-screensaver .content, .page-screensaver .orbit-container' ).height( heightContent);
		}


		/* MAP */
		function tt_map() {
			var mapHeight = $( '.map' ).innerHeight();
			$('#map').height( mapHeight );
		}


		/* JSON DATA */
		/*function tt_json_data() {

			$.getJSON(  'https://s3-eu-west-1.amazonaws.com/southside.tech.totem/recommendation-totem-1.json', function(data) {

				//console.log(data.solar.name);

			});
		}*/



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
			//tt_json_data();

	    });

});