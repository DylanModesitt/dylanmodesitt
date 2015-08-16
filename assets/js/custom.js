(function($){

	//preloader

	$(window).load(function() {
		$('#status').fadeOut();
		$('#preloader').delay(300).fadeOut('slow');
	});

	// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

	$(document).ready(function() {


		//scrolling
		//https://css-tricks.com/snippets/jquery/smooth-scrolling/

		$('a[href*=#]').bind("click", function(e){
           
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top
			}, 1000);
			e.preventDefault();
		});

		//Navigation

		$('.header').sticky({
			topSpacing: 0
		});

		//Navigation Scrollspy (Bootsrap)

		$('body').scrollspy({
			target: '.navbar-custom',
			offset: 70
		})

        
        //skills section
        //http://rendro.github.io/easy-pie-chart/

        $('.skills').waypoint(function(){
            $('.chart').each(function(){
            $(this).easyPieChart({
                    size:140,
                    animate: 2000,
                    lineCap:'butt',
                    scaleColor: false,
                    barColor: '#2c3e50',
                    trackColor: 'transparent',
                    lineWidth: 10
                });
            });
        },{offset:'80%'});
        
        
	// Quote Rotation
	// http://tympanus.net/codrops/2013/03/29/quotes-rotator
       
			$( function() {
				$( '#cbp-qtrotator' ).cbpQTRotator();
			} );
		

	// Perform WOWJS with scrolling

		wow = new WOW({
			mobile: false
		});
		wow.init();


	});

})(jQuery);