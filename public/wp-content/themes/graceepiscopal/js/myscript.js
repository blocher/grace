var fixed_menu = false;
window.jQuery = window.$ = jQuery;


/*-----------------------------------------------------------------------------------*/
/*	PRELOADER
/*-----------------------------------------------------------------------------------*/
// jQuery(window).load(function () {
// 	//Preloader
// 	setTimeout("jQuery('#preloader').animate({'opacity' : '0'},300,function(){jQuery('#preloader').hide()})",800);
// 	setTimeout("jQuery('.preloader_hide, .selector_open').animate({'opacity' : '1'},500)",800);
//   setTimeout("jQuery('footer').animate({'opacity' : '1'},500)",2000);

// });



/*-----------------------------------------------------------------------------------*/
//	NICESCROLL
/*-----------------------------------------------------------------------------------
jQuery(document).ready(function() {
	jQuery("body").niceScroll({
		cursorcolor:"#333",
		cursorborder:"0px",
		cursorwidth :"8px",
		zindex:"9999"
	});
});





/*-----------------------------------------------------------------------------------*/
/*	MENU
/*-----------------------------------------------------------------------------------*/
function calculateScroll() {
	var contentTop      =   [];
	var contentBottom   =   [];
	var winTop      =   $(window).scrollTop();
	var rangeTop    =   200;
	var rangeBottom =   500;
	$('.navmenu').find('.scroll_btn a').each(function(){
		contentTop.push( $( $(this).attr('href') ).offset().top );
		contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
	})
	$.each( contentTop, function(i){
		if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
			$('.navmenu li.scroll_btn')
			.removeClass('active')
			.eq(i).addClass('active');
		}
	})
};

jQuery(document).ready(function() {
	//MobileMenu
	if ($(window).width() < 1000){
		$('.menu_toggler').removeClass('hidden');
		jQuery('header .navmenu').hide();

	}

  $(window).resize(function() {
    var windowsize = $(window).width();
    if (windowsize > 1000) {
      jQuery('header .navmenu').show();
      $('.menu_toggler').addClass('hidden');
    } else {
      jQuery('header .navmenu').hide();
      $('.menu_toggler').removeClass('hidden');
    }
  });

  jQuery('.menu_toggler, .navmenu ul li a').click(function(){
    jQuery('header .navmenu').slideToggle(300, function() {
      if ($(this).is(":visible")) {
        $('#below-header').addClass('low-opacity');
      } else {
        $('#below-header').removeClass('low-opacity');
      }
    });
  });

	// // if single_page
	// if (jQuery("#page").hasClass("single_page")) {
	// }
	// else {
	// 	$(window).scroll(function(event) {
	// 		calculateScroll();
	// 	});
	// 	$('.navmenu ul li a, .mobile_menu ul li a, .btn_down').click(function() {
	// 		$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 1000);
	// 		return false;
	// 	});
	// };

});


// /* Superfish */
// jQuery(document).ready(function() {
// 	if ($(window).width() >= 768){
// 		$('.navmenu ul').superfish();
// 	}
// });



jQuery('.nav-main-item ').hover(function() {
	jQuery( this ).children('ul').css('display','block');
},
function(){
	jQuery( this ).children('ul').css('display','none');
});




/*-----------------------------------------------------------------------------------*/
/*	FLEXSLIDER
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){
	//Top Slider
	$('.flexslider.top_slider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: true,
		animationLoop: true,
		slideshow: true,
    slideshowSpeed: 4000,
		prevText: "",
		nextText: "",
	  // sync: "#carousel",
    before: function(slider){
      $('#carousel').flexslider(slider.animatingTo);
    }
	});
	$('#carousel').flexslider({
		animation: "fade",
		controlNav: false,
		animationLoop: true,
		directionNav: false,
		slideshow: false,
    slideshowSpeed: 4000,
		itemWidth: 100,
		itemMargin: 5,
		before: function(slider){
      $('.flexslider.top_slider').flexslider(slider.animatingTo);
    },
    asNavFor: '.flexslider.top_slider',
	});

	homeHeight();

  function checkForChanges()
  {
      $.each($('.main-slide.flex-active-slide'), function() {
        var id = $(this).prop('id');
        if (!$('#mini-' + id).hasClass('flex-active-slide')) {
          $('.mini-slide').removeClass('flex-active-slide');
          $('#mini-' + id).addClass('flex-active-slide');
        }
      });
      setTimeout(checkForChanges, 500);
  }

  checkForChanges();


	jQuery('.flexslider.top_slider .flex-direction-nav').addClass('container');


	// //Vision Slider
	// $('.flexslider.portfolio_single_slider').flexslider({
	// 	animation: "fade",
	// 	controlNav: true,
	// 	directionNav: true,
	// 	animationLoop: false,
	// 	slideshow: false,
	// });


});

jQuery(window).resize(function(){
	homeHeight();

});

jQuery(document).ready(function(){
	homeHeight();

});

function homeHeight(){
	var wh = jQuery(window).height();
	var ww = jQuery(window).width();
	if (ww<768) {
		jQuery('.top_slider, .top_slider .slides li').css('height', 300);
	} else {
		jQuery('.top_slider, .top_slider .slides li').css('height', wh);
	}

}









// /*-----------------------------------------------------------------------------------*/
// /*	OWLCAROUSEL
// /*-----------------------------------------------------------------------------------*/
// $(document).ready(function() {

// 	//WORKS SLIDER
//     var owl = $(".owl-demo.projects_slider");

//     owl.owlCarousel({
// 		navigation: true,
// 		pagination: false,
// 		items : 4,
// 		itemsDesktop : [1000,4],
// 		itemsDesktop : [600,3]
// 	});


// 	//TEAM SLIDER
//     var owl = $(".owl-demo.team_slider");

//     owl.owlCarousel({
// 		navigation: true,
// 		pagination: false,
// 		items : 3,
// 		itemsDesktop : [600,2]
// 	});



// 	jQuery('.owl-controls').addClass('container');


// 	//TESTIMONIALS SLIDER
//     var owl = $(".owl-demo.testim_slider");

//     owl.owlCarousel({
// 		itemsCustom : [
// 			[0, 1]
//         ],
// 		navigation: false,
// 		pagination: true,
// 		items : 1
// 	});



// 	jQuery('.owl-controls').addClass('container');


// });








/*-----------------------------------------------------------------------------------*/
/*	IFRAME TRANSPARENT
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	$("iframe").each(function(){
		var ifr_source = $(this).attr('src');
		var wmode = "wmode=transparent";
		if(ifr_source.indexOf('?') != -1) {
		var getQString = ifr_source.split('?');
		var oldString = getQString[1];
		var newString = getQString[0];
		$(this).attr('src',newString+'?'+wmode+'&'+oldString);
		}
		else $(this).attr('src',ifr_source+'?'+wmode);
	});
});







/*-----------------------------------------------------------------------------------*/
/*	BLOG MIN HEIGHT
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	blogHeight();
});

jQuery(window).resize(function(){
	blogHeight();
});

function blogHeight(){
	if ($(window).width() > 991){
		var wh = jQuery(window).height() - 80;
		jQuery('#blog').css('min-height', wh);
	}

}







// /*-----------------------------------------------------------------------------------*/
// /*	FOOTER HEIGHT
// /*-----------------------------------------------------------------------------------*/
// jQuery(document).ready(function() {
// 	contactHeight();
// });

// jQuery(window).resize(function(){
// 	contactHeight();
// });

// function contactHeight(){
// 	if ($(window).width() > 991){
// 		var wh = jQuery('footer').height() + 70;
// 		jQuery('#contacts').css('min-height', wh);
// 	}


// }





// /*-----------------------------------------------------------------------------------*/
// /*	FOOTER MAP
// /*-----------------------------------------------------------------------------------*/
// jQuery(document).ready(function() {
// 	jQuery('.map_show').click(function(){
// 		jQuery('#map').addClass('showed');
// 	});

// 	jQuery('.map_hide').click(function(){
// 		jQuery('#map').removeClass('showed');
// 	});
// });


jQuery('#search-form').click(function() {
	jQuery('#search-form input').focus();
});

jQuery('#search-form input').focus(function() {
	$('.main-nav').addClass('hidden');
});

jQuery('#search-form input').blur(function() {
	$('.main-nav').removeClass('hidden');
});


/**** tables *****/
jQuery(document).ready(function() {
    jQuery('#sermon-table').DataTable( {
        "order": [[ 0, "desc" ]],
        "lengthMenu": [[25, 10, 25, 50, 100, 200, 250, -1], [25, 10, 25, 50, 100, 200, 250, "All"]]
    } );

    $('#sermon-table_length select').removeClass('input-sm');

    jQuery('#gracenotes-table').DataTable( {
        "order": [[ 1, "desc" ]],
        "lengthMenu": [[25, 10, 25, 50, 100, 200, 250, -1], [25, 10, 25, 50, 100, 200, 250, "All"]]
    } );

    jQuery('#bulletin-insert-table').DataTable( {
        "order": [[ 1, "desc" ]],
        "lengthMenu": [[25, 10, 25, 50, 100, 200, 250, -1], [25, 10, 25, 50, 100, 200, 250, "All"]]
    } );


    $('#sermon-table_length select').removeClass('input-sm');

} );

jQuery(document).ready(function() {


  jQuery('a').each(function() {

     var a = new RegExp('/' + window.location.host + '/');
     if(this.href && !a.test(this.href)) {
         jQuery(this).click(function(event) {
             event.preventDefault();
             event.stopPropagation();
             window.open(this.href, '_blank');
         });
     }

  });

  $('.new-to-grace-link, .visitors-panel-close').click(function(e) {
		e.preventDefault();
		$('.visitors-panel').slideToggle(500, function() {
      var windowsize = $(window).width();
      if (windowsize > 1000) {
        jQuery('header .navmenu').show();
        $('.menu_toggler').addClass('hidden');
      } else {
        jQuery('header .navmenu').hide();
        $('.menu_toggler').removeClass('hidden');
      }
    });

	});





}) ;






var calendar = (function ($) {


		var upcomingEventsSpinner = function () {
      $("#events-heading").html('<span class="fa fa-spin fa-spinner fa-1x"></span>');
			$('#upcoming-events').html('<span class="fa fa-spin fa-spinner fa-2x"></span>');
			$('html, body').animate({
	        scrollTop: $('.hearings-section .section-title').offset().top
	    }, 200);
		};

    var init = function() {


    	var data = {type:"upcoming",limit:8};
	    $.get("wp-content/themes/graceepiscopal/ajax/get-events.php", data, function(data, status){
	        $("#upcoming-events").html(data);
	    });


	    jQuery(".responsive-calendar").responsiveCalendar({
        startFromSunday: true,
        onInit: function () {
        	var data = {type:"counts",start_year:this.currentYear,start_month: this.currentMonth+1};
        	$.get("wp-content/themes/graceepiscopal/ajax/get-events.php", data, function(data, status){
			        $.each(data, function(k,v) {
			        	var obj = {};
			        	obj[k] = {"number": v, "badgeClass": "badge-warning", "url": "#"};
								$('.responsive-calendar').responsiveCalendar('edit', obj);
							});
				   }, 'json');
        },
        onMonthChange: function () {
        	upcomingEventsSpinner();
        	var data = {type:"counts",start_year:this.currentYear,start_month: this.currentMonth+1};
        	$.get("wp-content/themes/graceepiscopal/ajax/get-events.php", data, function(data, status){
			        $.each(data, function(k,v) {
			        	var obj = {};
			        	obj[k] = {"number": v, "badgeClass": "badge-warning", "url": "#"};
								$('.responsive-calendar').responsiveCalendar('edit', obj);
							});
				   }, 'json');
        	var data = {type:"month",start_year:this.currentYear,start_month: this.currentMonth+1};
        	$.get("wp-content/themes/graceepiscopal/ajax/get-events.php", data, function(data, status){
			        $("#upcoming-events").html(data);
              $("#events-heading").html("Events in " + $("[data-head-month]").first().html()  + " " + $("[data-head-year]").first().html());
				   });
          $('.reset-events-btn').show();
        }
      });

      $(document).on("click", '.day a', function (e) {
      	e.preventDefault();
      });

      $(document).on("click", '.day.active a', function (e) {
      	upcomingEventsSpinner();
      	e.preventDefault();
        var day =$(this).data('day');
      	var data = {type:"single",start_day:$(this).data('day'),start_month:$(this).data('month'),start_year:$(this).data('year'),limit:100};
		    $.get("wp-content/themes/graceepiscopal/ajax/get-events.php", data, function(data, status){
		        $("#upcoming-events").html(data);
            $("#events-heading").html("Events on " + $("[data-head-month]").first().html()  + " " + day + ", " + $("[data-head-year]").first().html());
		    });
        $('.reset-events-btn').show();
      });

      $(document).on("click", '.reset-events-btn', function (e) {
        e.preventDefault();
        upcomingEventsSpinner();
          var data = {type:"upcoming",limit:12};
          $.get("wp-content/themes/graceepiscopal/ajax/get-events.php", data, function(data, status){
              $("#upcoming-events").html(data);
               $("#events-heading").html('Upcoming Events');
          });
      });

    }

    return {

        init: function() {
            init();
        },
    };

})(jQuery);


jQuery(document).ready(function() {
    var div = jQuery("#upcoming-events");
    if ( div.length ) {
        calendar.init();
    }

    var div = jQuery("#calendar");
    if ( div.length ) {
        jQuery('#calendar').fullCalendar({
            events: '/wp-content/themes/graceepiscopal/ajax/get-calendar-events.php',
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay,listWeek'
            },
            buttonIcons: {
                prev: 'left-single-arrow',
                next: 'right-single-arrow',
                prevYear: 'left-double-arrow',
                nextYear: 'right-double-arrow'
            },
            editable: false,
            eventLimit: false, // allow "more" link when too many events
            navLinks: true,
            handleWindowResize: true,
            displayEventTime: true,
            theme: false,
            defaultView: 'listWeek',
            firstDay: 0,
            height: 'auto'

        });
    }

});

jQuery( document ).ready(function( $ ) {
    $('.btn-mailchimp').click(function() {
      var form = $(this).closest('form');
      $('footer input[type=text], footer input[type=email]').removeClass('error');
      $('.error_div, .success_div').html('');
      $('.error_div').slideUp();
      $('.success_div').slideUp();
      var data = {};
        $.each(form.serializeArray(), function(_, kv) {
          data[kv.name] = kv.value;
        });
      $('.footer-signup-spin').show();
      $.get("/wp-content/themes/graceepiscopal/ajax/mailchimp-signup.php", data, function(data, status){
          if (data.status=='error' && data.error_type=='validation') {
            $('.error_div').html('');
            $.each(data.errors, function( index, value ) {
                $('input[name=' + index +']').addClass('error');
                $('.error_div').html($('.error_div').html() + value + ' ');

            });
            $('.error_div').slideDown();
            $('.footer-signup-spin').hide();
          } else if (data.status=='error') {
            console.log(data.errors);
            $('.error_div').html(data.errors.join('; '));
            $('.error_div').slideDown();
            $('.footer-signup-spin').hide();
          } else {
            $('input').removeClass('error');
            $('.error_div').html('');
            $('.error_div').slideUp();
            $('.success_div').html('Thanks for signing up!  Look forward to your first email soon.');
            $('.success_div').slideDown().delay(3000).slideUp(300);
            $('#footer-signup input[type=text], #footer-signup  input[type=email]').val('');
            $('.footer-signup-spin').hide();
          }
      },'json');
    });

    $('.scroll-to-signup').click(function(e) {
      e.preventDefault();

      $('html, body').animate({
        scrollTop: $("#sign-up-heading").offset().top
      }, 2000);

      $('#footer-signup input[name=fname]').focus();

    });
});

