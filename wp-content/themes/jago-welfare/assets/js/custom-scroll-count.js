/*==========

Template Name: Morbizz - SEO & Digital Marketing HTML Template
==========*/

/*==========
----- JS INDEX -----
1.Whole Script Strict Mode Syntax
2.Counting JS
==========*/



jQuery(document).ready(function(jQuery) {

	// Whole Script Strict Mode Syntax
	"use strict";

	var a = 0;
	var b = 0;
	jQuery(window).on('scroll', function() {

	// Counting JS Start
		var oTop = jQuery('#counter').offset().top - window.innerHeight;
		if (a === 0 && jQuery(window).scrollTop() > oTop) {
			jQuery('.counting-data').each(function() {
			  var jQuerythis = jQuery(this),
			      countTo = jQuerythis.attr('data-count');
			  
			  jQuery({ countNum: jQuerythis.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 3000,
			    easing:'linear',
			    step: function() {
			      jQuerythis.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      jQuerythis.text(this.countNum);
			    }

			  });  
			  
			});
		a = 1;
	  	}
	// Counting JS End

	});

});

