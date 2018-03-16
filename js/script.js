$(document).ready(function() {
	headerWidth();
});
function getScrollBarWidth () {
	var inner = document.createElement('p');
	inner.style.width = "100%";
	inner.style.height = "200px";

	var outer = document.createElement('div');
	outer.style.position = "absolute";
	outer.style.top = "0px";
	outer.style.left = "0px";
	outer.style.visibility = "hidden";
	outer.style.width = "200px";
	outer.style.height = "150px";
	outer.style.overflow = "hidden";
	outer.appendChild (inner);

	document.body.appendChild (outer);
	var w1 = inner.offsetWidth;
	outer.style.overflow = 'scroll';
	var w2 = inner.offsetWidth;
	if (w1 == w2) w2 = outer.clientWidth;
	document.body.removeChild (outer);
	return (w1 - w2);
};
function headerWidth() {
	var winWidth = $(window).width();
	var scroll = getScrollBarWidth();
	var w = winWidth- scroll;
	$('.header').width(w);
	// $('.header .top').width(w);
	if ($('.head-space').length) {
		$('.head-space').width(w);
	}
	return 0;
}
$(function() {
	$('[data-toggle="tooltip"]').tooltip();
	if ($('.datepicker').length) {
		$('.datepicker').datepicker();
	}
	// Initialize Slidebars
	var controller = new slidebars();
	controller.init();
	$( '.body' ).click(function(event) {
		if ($('.three-bars-icon').hasClass('close')) {
			controller.toggle( 'id-2');
			$('.three-bars-icon').removeClass('close');
		}
	});
	$( '.trigger-menu' ).on( 'click', function ( event ) {
		if ($('.three-bars-icon').hasClass('close')) {
			$('.three-bars-icon').removeClass('close');
			$('.header').css('left', '0');
		}
		else {
			$('.three-bars-icon').addClass('close');
			$('.header').css('left', '255px');
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
		$('.header').css('left', '0');
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

$(document).ready(function() {
	//Header script
	$(".header .nav li").each(function(){
      if ($(this).has("ul").length) {
        $(this).find('a').eq(0).append('<span class="icon down"><i class="fas fa-angle-down"></i></span>')
      };
    });

    //Menu hover script
	$('.header .nav li').hover(
      function() {
          $('.header .nav li').removeClass('activeX');
          $(this).find('ul').eq(0).stop(false, true).slideDown(200);
          $(this).parent().css('overflow', 'visible');
      },
      function() {
          $('.header .nav li').removeClass('activeX');
          $(this).find('ul').eq(0).stop(false, true).slideUp(200);
      }
    );
    function addOverlay(parent) {
    	if (!$(parent + ' .overlay').length) {
  			$(parent).prepend('<div class="overlay"></div>');
  		}
    }
    function removeOverlay(parent) {
    	if ($(parent + ' .overlay').length) {
  			$(parent + ' .overlay').remove();
  		}
    }
	$('.header .search .icon').click(function(event) {
	  	if (!$('.header .search').hasClass('show')) {
	  		$('.header .search').addClass('show');
	  		addOverlay('body');
	  		addOverlay('.header .container');
	  	}
	  	if ($('.header .clinics').hasClass('show')) {
			$('.header .clinics').removeClass('show');
		}
	});
	$('body').on('click', '.overlay', function(event) {
	  	$('.header .search').removeClass('show');
	  	$('.header .clinics').removeClass('show');
	  	removeOverlay('body');
	  	removeOverlay('.header .container');
	});
	$('.header .clinics .icon').click(function() {
		if ($('.header .clinics').hasClass('show')) {
			$('.header .clinics').removeClass('show');
			removeOverlay('.header .container');
		}
		else {
			$('.header .clinics').addClass('show');
			addOverlay('body');
	  		addOverlay('.header .container');
		}
		
	});
	$('.body').scroll(function(){
		if ($(this).scrollTop() > 40) {
			$('.header').css('background-color', '#ffffff');
			if ($(window).width() > 1024) {
				if (!$('.header').hasClass('small')) {
		  			$('.header').addClass('small');
		  		}
		  		if ($('.head-space').length) {
		  			if (!$('.head-space').hasClass('small')) {
			  			$('.head-space').addClass('small');
			  		}
		  		}
		  		
			}
		} else {
			if ($('.header').hasClass('small')) {
					$('.header').removeClass('small');
			}
			$('.header').css('background-color', 'rgba(255, 255, 255, 0.8)');
			if ($('.head-space').length) {
	  			if ($('.head-space').hasClass('small')) {
		  			$('.head-space').removeClass('small');
		  		}
	  		}
		}
	});

    //footer script
    $('.footer .nav').find('li').find('a').addClass('.nav-link');
	$('.footer .nav li:has(ul)').addClass('dropdown');
	$('.footer .nav li:has(ul) > a').addClass('dropdown-toggle').attr({
		'data-toggle': 'dropdown',
		'aria-haspopup': 'true',
		'aria-expanded' : 'false'
	});
	$(".footer .nav li").each(function(){
      if ($(this).has("ul").length) {
        $(this).find('ul').eq(0).addClass('dropdown-menu');
        $(this).find('li').addClass('dropdown-item');
      };
    });
    
    //Mobile menu script
	if ($('.nav-mobile').length) {
	    $(".nav-mobile li").each(function (index, obj) {
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).append('<span class="icon down"><i class="fas fa-angle-down"></i> </span> <span class="icon up"><i class="fas fa-angle-up"></i><span>');
	        $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      };
	    });
	    $(".nav-mobile > li").click(
	      function() {
	      	if ($(this).hasClass('active')) {
	      		$(this).removeClass('active');
	    		$(this).find('ul').slideUp(400);
	      	}
	      	else {
	      		$(".nav-mobile > li").removeClass('active');
		        $(this).addClass('active');
		        if ($(this).has("ul").length) {
		          $(".nav-mobile > li").not('.active').find('ul').slideUp(400);
		          $(this).find('ul').eq(0).slideDown(400);
		        };
	      	}
	      }
	    );
	    $(".nav-mobile > li > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	          $(".nav-mobile > li > ul > li ul").slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".nav-mobile > li > ul > li  > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(".nav-mobile > li > ul > li  > ul > li").removeClass('active');
	        	$(this).addClass('active');
	        	$(".nav-mobile > li > ul > li  > ul > li ul").slideUp(400);
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	}
	// Appointment form
	$('.find-doctor').click(function(event) {
		var cls = "." + $(this).attr('active');
		$('.dcform').fadeOut(400);
		$(cls).fadeIn(400);
	});

	$('.appointment').hover(function() {

		var x = getCookie('appointmentAgree');
		if (!x) {
			$(this).addClass('hover');
			if ($(window).width() > 1024) {
				$('.appointment').css('top', '22%');
			}
		}
		else {
			if ($(window).width() > 1024) {
				$('.appointment').css('top', '26%');
			}
		}
		
	}, function() {
		$(this).removeClass('hover');
		if ($(window).width() > 1024) {
				$('.appointment').css('top', '26%');
		}
	});
	$('#agree-form .btn').click(function(event) {
		if (document.getElementById('defaultCheck1').checked && document.getElementById('defaultCheck2').checked) {
			setCookie('appointmentAgree','1',1);
			$('.appointment').removeClass('hover');
			$('.appointment').css('top', '26%');
		}
		else {
			confirm("Bạn chưa chọn đồng ý!");
		}
	});
	//Right menu about us page
	if ($('.right-menu').length) {
	    $(".right-menu ul li").each(function(){
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).append('<span class="icon down"><i class="fas fa-angle-down"></i> </span> <span class="icon up"><i class="fas fa-angle-up"></i><span>')
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
	function setCookie(name,value,days) {
	    var expires = "";
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime() + (days*24*60*60*1000));
	        expires = "; expires=" + date.toUTCString();
	    }
	    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	}
	function getCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}
	function eraseCookie(name) {   
	    document.cookie = name+'=; Max-Age=-99999999;';  
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
			        slidesToShow: 2,
			        slidesToScroll:2,
			        infinite: true,
			        dots: true
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
			      breakpoint: 1024,
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
			      breakpoint: 1024,
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
	$('.body').scroll(function(){
	    if ($(this).scrollTop() > 100) {
	      $('.scrollToTop').fadeIn();
	    } else {
	      $('.scrollToTop').fadeOut();
	    }
	});
	  
	//Click event to scroll to top
		$('.scrollToTop').click(function(){
		$('.body').animate({scrollTop : 0},800);
		return false;
	});

	// Step
	if ($('.steps-container').length) {
		setWWidth();
		var x = 0;
	    $('.steps .next').click(function(event) {
	    	x = x + $('.appointment .tab-pane').width();
	    	transform(x)
	    });
	     $('.steps .prev').click(function(event) {
	    	x = x - $('.appointment .tab-pane').width();
	    	transform(x)
	    });
	};
	function setWWidth() {
		var numSection = 2;
		$('.steps-container .steps-content').css({width: numSection * $('.appointment .tab-pane').width()});
		// $('.steps-container .steps-content .steps').css({width: $('.appointment .tab-pane').width()});

	}
	function transform(x) {
    	$('.steps-container .steps').css({
    		'transition-duration' : '0.5s',
    		'transform' : 'translate3d(-' + x +'px, 0px, 0px)'
    	});
	}
	// End Step
	$(window).resize(function(){
        clearTimeout(window.resizeEvt);
        window.resizeEvt = setTimeout(function(){
        	headerWidth();
        }, 250);
    });
	$(window).bind('resize', function(e){
	    window.resizeEvt;
	    $(window).resize(function(){
	        clearTimeout(window.resizeEvt);
	        window.resizeEvt = setTimeout(function(){
	        	headerWidth();
	        }, 100);
	    });
	});
})
$(function () {
	if ($('.dropdown-toggle').length) {
		$('.dropdown-toggle').append('<span class="icon"><i class="fas fa-angle-down"></i><span>')
	}
	if ($('.accordion .card-header').length) {
		$('.accordion .card-header .btn-link').append('<span class="icon plus"><i class="fas fa-plus"></i></span><span class="icon minus"><i class="fas fa-minus"></i><span>');
	}
	if ($('.make-appointment-page .make-form li').length) {
		$('.make-appointment-page .make-form li').prepend('<span class="icon"><i class="fas fa-square"></i></span>');
	}
	if ($('.appointment #agree-form li').length) {
		$('.appointment #agree-form li').prepend('<span class="icon"><i class="fas fa-square"></i></span>');
	}

})