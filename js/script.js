$(function() {
	$('[data-toggle="tooltip"]').tooltip();
	if ($('.datepicker').length) {
		$('.datepicker').datepicker();
	}
	// Initialize Slidebars
	var controller = new slidebars();
	controller.init();
	$( '.trigger-menu' ).on( 'click', function ( event ) {
		if ($('.three-bars-icon').hasClass('close')) {
			$('.three-bars-icon').removeClass('close');
		}
		else {
			$('.three-bars-icon').addClass('close');
		}
		// Stop default action and bubbling
		event.stopPropagation();
		event.preventDefault();

		// Toggle the Slidebar with id 'id-2'
		controller.toggle( 'id-2');
	});
	$( controller.events ).on( 'closing', function ( event ) {
		$('.nav-mobile li').each(function(index, el) {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$(this).find('ul').eq(0).slideUp(400);
			}
		});
	} );
	if ($(window).width() <= 1024) {
		var html = '<ul class="nav-mobile">' + $('.main-nav .nav').html() + '</ul>';
		$('.sidebar .content').html(html);
		$('.nav-mobile li a').each(function(index, el) {
			$(this).removeAttr('class');
			$(this).attr({
				'id': '',
				'data-toggle': '',
				'aria-haspopup': '',
			});
		});
		$('.nav-mobile li').each(function(index, el) {
			$(this).removeAttr('class')
		});
		$('.nav-mobile ul').each(function(index, el) {
			$(this).removeAttr('class');
		});
	}
});

$(function () {
	$('.nav').find('li').find('a').addClass('nav-link');
	$('.nav li:has(ul)').addClass('dropdown');
	$('.nav li:has(ul) > a').addClass('dropdown-toggle').attr({
		'data-toggle': 'dropdown',
		'aria-haspopup': 'true',
		'aria-expanded' : 'false'
	});
	$(".nav li").each(function(){
      if ($(this).has("ul").length) {
        $(this).find('ul').eq(0).addClass('dropdown-menu');
        $(this).find('li').addClass('dropdown-item');
      };
    });
	if ($('.left-menu').length) {
	    $(".left-menu ul li").each(function(){
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).addClass('hassub');
	      };
	    });
	    $.each($(".left-menu ul li"), function (index, obj) {
	      if ($(obj).has("ul").length) {
	          $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      }
	    });
	    $(".left-menu > ul > li").click(
	      function() {
	        $(".left-menu > ul > li").removeClass('active');
	        $(this).addClass('active');
	        if ($(this).has("ul").length) {
	          $(".left-menu  > ul > li").not('.active').find('ul').slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".left-menu > ul > li > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	          $(".left-menu > ul > li > ul > li ul").slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	     $(".left-menu > ul > li > ul > li  > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(".left-menu > ul > li > ul > li  > ul > li").removeClass('active');
	        	$(this).addClass('active');
	        	$(".left-menu > ul > li > ul > li  > ul > li ul").slideUp(400);
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	}
	if ($('.nav-mobile').length) {
	    $(".nav-mobile li").each(function(){
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).addClass('hassub')
	      };
	    });
	    $.each($(".nav-mobile li"), function (index, obj) {
	      if ($(obj).has("ul").length) {
	          $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      }
	    });
	    $(".nav-mobile > li").click(
	      function() {
	        $(".nav-mobile  > li").removeClass('active');
	        $(this).addClass('active');
	        if ($(this).has("ul").length) {
	          $(".nav-mobile  > ul > li").not('.active').find('ul').slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".nav-mobile > li > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(this).addClass('active');
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".nav-mobile > li > ul > li > ul >li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(this).addClass('active');
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	}
	
});
$(function () {
	if ($('.doctors-slider').length) {
		$('.doctors-slider').slick({
			dots: true,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			 ]
		});
	}
	
	if ($('.services-slider').length) {
		$('.services-slider').slick({
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: '.services-arrow-left',
            nextArrow: '.services-arrow-right',
            responsive: [
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			 ]
		});
	}
	if ($('.news-slider').length) {
		$('.news-slider').slick({
			dots: true,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			arrows: false,
			responsive: [
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			 ]
		});
	}
	$('.find-doctor').click(function(event) {
		var cls = "." + $(this).attr('active');
		$('.dcform').fadeOut(400);
		$(cls).fadeIn(400);
	});

	$('.appointment').hover(function() {
		$('#make-appointment').css('display', 'none');
		$('#agree-form').css('display', 'block');
	}, function() {
		$('#agree-form').css('display', 'none');
		$('#make-appointment').css('display', 'block');
	});	

	if ($('.right-menu').length) {
	    $(".right-menu ul li").each(function(){
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).addClass('hassub');
	      };
	    });
	    $.each($(".right-menu ul li"), function (index, obj) {
	      if ($(obj).has("ul").length) {
	          $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      }
	    });
	    $(".right-menu > ul > li").click(
	      function() {
	        $(".right-menu > ul > li").removeClass('active');
	        $(this).addClass('active');
	        if ($(this).has("ul").length) {
	          $(".right-menu  > ul > li").not('.active').find('ul').slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".right-menu > ul > li > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	          $(".right-menu   > ul > li > ul > li ul").slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	  }

})