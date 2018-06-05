jQuery(function($) {

	/* INIT FOUNDATION */
	$(document).foundation();


	/* CLOCK */	
	function tt_getdate(){

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
			tt_getdate()
		}, 500);
	}


	/* NAVBAR */
	function tt_contentBottomSpacing() {
		var contentBottomSpacing = $( '.navbar' ).innerHeight();
		$('.content-main').css( 'margin-bottom', contentBottomSpacing );
	}
	

	/* 
	 * DOCUMENT READY
	 */
	$(document).ready(function(){

		tt_getdate();
		tt_contentBottomSpacing();

    });

});