/*-----------------------------------------
		Fancybox
	------------------------------------------*/

function openCreateStorePopup(e, storeName) {
	$.fancybox.open({
		fitToView: false,
		closeClick: false,
		openEffect: 'fade',
		closeEffect: 'fade',
		href: "#registration",
		width: "100%",
		maxWidth: 847,
		autoSize: false,
		autoHeight: true,
		margin: [20, 0, 20, 0]
	});
};

/*-----------------------------------------
		End Fancybox
	------------------------------------------*/
$(function(){
	$('.plus').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('.parent').find('ul.level1 ').stop().slideToggle();
		return false;
	});

});
/* ================================
===  BACKGROUND SLIDER        ====
================================= */
$.vegas('slideshow', {
	delay:5000,
	backgrounds:[
		{ src:"slider_1.jpg"/*tpa=http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/slider_1.jpg*/, fade:1000 },
		{ src:"slider_2.jpg"/*tpa=http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/slider_2.jpg*/, fade:1000 },
		{ src:"slider_3.jpg"/*tpa=http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/slider_3.jpg*/, fade:1000 },
	]
});
/* Product Gallery
==================================================================*/
jQuery(document).ready(function($){
	var sync1 = $("#product-large");
	var sync2 = $("#product-thumb");

	sync1.owlCarousel({
		singleItem : true,
		slideSpeed : 1000,
		navigation: false,
		pagination:false,
		afterAction : syncPosition,
		responsiveRefreshRate : 200,
	});

	sync2.owlCarousel({
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [979,4],
		itemsTablet : [768,4],
		itemsMobile : [479,3],
		pagination:false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsiveRefreshRate : 100,
		afterInit : function(el){
			el.find(".owl-item").eq(0).addClass("synced");
		}
	});

	function syncPosition(el){
		var current = this.currentItem;
		$("#product-thumb")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced");
		if($("#product-thumb").data("owlCarousel") !== undefined){
			center(current)
		}
	}

	$("#product-thumb").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync1.trigger("http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/owl.goTo",number);
	});

	function center(number){
		var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for(var i in sync2visible) {
			if(num === sync2visible[i]) {
				var found = true;
			}
		}

		if(found===false) {
			if(num>sync2visible[sync2visible.length-1]) {
				sync2.trigger("http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/owl.goTo", num - sync2visible.length+2)
			} else {
				if(num - 1 === -1){
					num = 0;
				}
				sync2.trigger("http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/owl.goTo", num);
			}
		} else if(num === sync2visible[sync2visible.length-1]) {
			sync2.trigger("http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/owl.goTo", sync2visible[1])
		} else if(num === sync2visible[0]) {
			sync2.trigger("http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/owl.goTo", num-1)
		}
	}

});


/* =================================
   LOADER                     
=================================== */
// makes sure the whole site is loaded
jQuery(window).load(function() {
	// will first fade out the loading animation
	jQuery(".status").fadeOut();
	// will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})


/* =================================
===  Bootstrap Fix              ====
=================================== */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style')
	msViewportStyle.appendChild(
		document.createTextNode(
			'@-ms-viewport{width:auto!important}'
		)
	)
	document.querySelector('head').appendChild(msViewportStyle)
}

/* =================================
===  STICKY NAV                 ====
=================================== */

$(document).ready(function() {
	$('.main-nav-list').onePageNav({
		changeHash: true,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: ':not(.external)'
	});

	// Sticky Header - http://jqueryfordesigners.com/fixed-floating-elements/         
	var top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('margin-top').replace(/auto/, 0));

	$(window).scroll(function (event) {
		// what the y position of the scroll is
		var y = $(this).scrollTop();

		// whether that's below the form
		if (y >= top) {
			// if so, ad the fixed class
			$('#main-nav').addClass('fixed');
		} else {
			// otherwise remove it
			$('#main-nav').removeClass('fixed');
		}
	});

});



$('#xshow').click(function(){
	$(this).next('.xx').slideToggle('500');
});



/*---------------------------------------*/
/*  SMOOTH SCROLL FRO INTERNAL #HASH LINKS
/*---------------------------------------*/
$(document).ready(function(){
	$('a[href^="#"].inpage-scroll, .inpage-scroll a[href^="#"]').on('click', function(e) {
		e.preventDefault();

		var target = this.hash,
			$target = $(target);
		$('.main-navigation a[href="' + target + '"]').addClass('active');
		$('.main-navigation a:not([href="' + target + '"])').removeClass('active');
		$('html, body').stop().animate({
			'scrollTop': ($target.offset()) ? $target.offset().top : 0
		}, 900, 'swing', function() {
			window.location.hash = target;
		});
	});
});

/*=================================
===  OWL CROUSEL               ====
===================================*/
$(document).ready(function() {
	var owl = $("#client-feedbacks");
	owl.owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1000,2], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});
});


/*=================================
===  SMOOTH SCROLL             ====
=================================== */
var scrollAnimationTime = 1200,
	scrollAnimation = 'easeInOutExpo';
$('a.scrollto').bind('click.smoothscroll',function (event) {
	event.preventDefault();
	var target = this.hash;
	$('html, body').stop().animate({
		'scrollTop': $(target).offset().top
	}, scrollAnimationTime, scrollAnimation, function () {
		window.location.hash = target;
	});
});   


/* =================================
===  CONTACT FORM          ====
=================================== */

$("#contact-form").submit(function (e) {
	e.preventDefault();
	var name = $("#name").val();
	var email = $("#email").val();
	var subject = $("#subject").val();
	var message = $("#message").val();
	var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;

	function isValidEmail(emailAddress) {
		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		return pattern.test(emailAddress);
	};

	if (isValidEmail(email) && (message.length > 1) && (name.length > 1)) {
		$.ajax({
			type: "POST",
			url: "http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/sendmail.php",
			data: dataString,
			success: function () {
				$('.success').fadeIn(1000);
				$('.error').fadeOut(500);
			}
		});
	} else {
		$('.error').fadeIn(1000);
		$('.success').fadeOut(500);
	}

	return false;
});


/* ================================
===  PROJECT LOADING           ====
================================= */

jQuery(document).ready(function($) {
	$('.more').on('click', function(event) {
		event.preventDefault();

		var href = $(this).attr('href') + ' .single-project',
			portfolioList = $('#portfolio-list'),
			content = $('#loaded-content');

		portfolioList.animate({'marginLeft':'-120%'},{duration:400,queue:false});
		portfolioList.fadeOut(400);
		setTimeout(function(){ $('#loader').show(); },400);
		setTimeout(function(){
			content.load(href, function() {
				$('#loaded-content meta').remove();
				$('#loader').hide();
				content.fadeIn(600);
				$('#back-button').fadeIn(600);
			});
		},800);

	});

	$('#back-button').on('click', function(event) {
		event.preventDefault();

		var portfolioList = $('#portfolio-list')
		content = $('#loaded-content');

		content.fadeOut(400);
		$('#back-button').fadeOut(400);
		setTimeout(function(){
			portfolioList.animate({'marginLeft':'0'},{duration:400,queue:false});
			portfolioList.fadeIn(600);
		},800);
	});
});

/* ================================
===  PARALLAX                  ====
================================= */
$(document).ready(function(){
	var $window = $(window);
	$('div[data-type="background"], header[data-type="background"], section[data-type="background"]').each(function(){
		var $bgobj = $(this);
		$(window).scroll(function() {
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			var coords = '50% '+ yPos + 'px';
			$bgobj.css({ 
				backgroundPosition: coords 
			});
		});
	});
});

/* ================================
===  KNOB                      ====
================================= */
$(function() {
	$(".skill1").knob({
		'max':100,
		'width': 64,
		'readOnly':true,
		'inputColor':' #FFFFFF ',
		'bgColor':' #222222 ',
		'fgColor':' #e96656 '
	});
	$(".skill2").knob({
		'max':100,
		'width': 64,
		'readOnly':true,
		'inputColor':' #FFFFFF ',
		'bgColor':' #222222 ',
		'fgColor':' #34d293 '
	});
	$(".skill3").knob({
		'max': 100,
		'width': 64,
		'readOnly': true,
		'inputColor':' #FFFFFF ',
		'bgColor':' #222222 ',
		'fgColor':' #3ab0e2 '
	});
	$(".skill4").knob({
		'max': 100,
		'width': 64,
		'readOnly': true,
		'inputColor':' #FFFFFF ',
		'bgColor':' #222222 ',
		'fgColor':' #E7AC44 '
	});
});



/* =================================
===  WOW ANIMATION             ====
=================================== */
/*  Brand Logo Slider */

jQuery("#brand-logo-slider .slider-items").owlCarousel({
	autoPlay: !0,
	items: 8,
	itemsDesktop: [1024, 7],
	itemsDesktopSmall: [900, 5],
	itemsTablet: [768, 5],
	itemsMobile: [480, 3],
	navigation: !0,
	navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
	slideSpeed: 500,
	pagination: !1
}),


	new WOW().init();

jQuery(document).ready(function($){
	var ww = $(window).width();
	var nh = $('#main-nav').height();
	$('.vegas-background').css('padding-top',nh);
	if (ww >= 1024){
		$('.header').css('min-height',nh);
	}
});