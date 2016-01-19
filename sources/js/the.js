(function($){

	$(function() {
		    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
		        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
		    }).on("focus", ".floating-label-form-group", function() {
		        $(this).addClass("floating-label-form-group-with-focus");
		    }).on("blur", ".floating-label-form-group", function() {
		        $(this).removeClass("floating-label-form-group-with-focus");
		    });
		});
	// Initialization of full page
	$(document).ready(function() {

		
		$( function() {
				$( '#cbp-qtrotator' ).cbpQTRotator();
			} );
		

		$('.skills').waypoint(function(){
            $('.chart').each(function(){
            $(this).easyPieChart({
                    size:140,
                    animate: 2000,
                    scaleColor: false,
                    barColor: '#ffffff',
                    trackColor: 'transparent',
                    lineWidth: 10
                });
            });
        },{offset:'80%'});
		 
		wow = new WOW({
			mobile: false
		});
		wow.init();

		if ($( window ).width() < 1200) {
	         $('#fullpage').fullpage({

		        //Scrolling
		        css3: true,
		        scrollingSpeed: 700,
		        autoScrolling: false,
		        easing: 'easeInOutCubic',
		        easingcss3: 'ease',
		        loopBottom: false,
		        loopHorizontal: true,
		        continuousVertical: false,
		        scrollOverflow: false,
		        scrollBar: false,
		        touchSensitivity: 50,
		        normalScrollElementTouchThreshold: 5,

		        //Accessibility
		        keyboardScrolling: true,
		        animateAnchor: true,
		        recordHistory: false,

		        //Design
		        controlArrows: false,
		        verticalCentered: true,
		        sectionsColor : ['#ccc', '#fff'],
		        paddingTop: '3em',
		        paddingBottom: '10px',
		        responsiveWidth: 500,
		        responsiveHeight: 500,
		        fitToSection: false,
		        

		        //Custom selectors
		        sectionSelector: '.section',
		        slideSelector: '.slide',

				// navigation
		    	anchors: ['me', 'portfolio', 'announcements', 'references', 'information', 'contact', 'footer'],
				sectionsColor: ['#f5f5f5','#f5f5f5', '#f5f5f5', '#4B0082', '#f5f5f5', '#E3493B', '#333'],
				navigation: true,
				navigationPosition: 'right',
	        	slidesNavigation: true,
	        	slidesNavPosition: 'top',
		    	

		    });
	    } else {
	    	 $('#fullpage').fullpage({

		        //Scrolling
		        css3: true,
		        scrollingSpeed: 700,
		        autoScrolling: false,
		        easing: 'easeInOutCubic',
		        easingcss3: 'ease',
		        loopBottom: false,
		        loopHorizontal: true,
		        continuousVertical: false,
		        scrollOverflow: false,
		        scrollBar: false,
		        touchSensitivity: 30,
		        normalScrollElementTouchThreshold: 5,

		        //Accessibility
		        keyboardScrolling: true,
		        animateAnchor: true,
		        recordHistory: false,

		        //Design
		        controlArrows: false,
		        verticalCentered: true,
		        sectionsColor : ['#ccc', '#fff'],
		        paddingTop: '3em',
		        paddingBottom: '10px',
		        responsiveWidth: 500,
		        responsiveHeight: 500,

		        

		        //Custom selectors
		        sectionSelector: '.section',
		        slideSelector: '.slide',

				// navigation
		    	anchors: ['me', 'portfolio', 'announcements', 'references', 'information', 'contact', 'footer'],
				sectionsColor: ['#f5f5f5','#f5f5f5', '#f5f5f5', '#4B0082', '#f5f5f5', '#E3493B', '#333'],
				navigation: true,
				navigationPosition: 'right',
	        	slidesNavigation: true,
	        	slidesNavPosition: 'top',
		    	

		    });
	    }

	   


	});

})(jQuery);