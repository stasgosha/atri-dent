$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Sliders
	$('.about-features-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1,
					adaptiveHeight: true
				}
			}
		]
	});

	$('.team-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					adaptiveHeight: true
				}
			}
		]
	});

	$('.reviews-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					adaptiveHeight: true
				}
			}
		]
	});

	// Services Slider
	var servicesSliderFlag = false;

	function servicesSliderInit(){
		if ( $(window).width() <= 991 && !servicesSliderFlag) {
			$('.services-slider').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			servicesSliderFlag = true;
		} else if($(window).width() > 991 && servicesSliderFlag) {
			$('.services-slider').slick('unslick');
			servicesSliderFlag = false;
		}
	};

	var onePageServicesSliderFlag = false;

	function onePageServicesSliderInit(){
		if ( $(window).width() <= 991 && !onePageServicesSliderFlag) {
			$('.one-page-services-slider').slick({
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			onePageServicesSliderFlag = true;
		} else if($(window).width() > 991 && onePageServicesSliderFlag) {
			$('.one-page-services-slider').slick('unslick');
			onePageServicesSliderFlag = false;
		}
	};

	if ( $(window).width() <= 991 ){
		servicesSliderInit();
		onePageServicesSliderInit();
	}

	$(window).resize(function(){
		servicesSliderInit();
		onePageServicesSliderInit();
	});

	$('.instagram-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 586,
				settings: {
					slidesToShow: 2
				}
			}
		]
	});

	// Tabs
	$("[data-tab]").click(function(){
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab].current").click();

	// Accordions
	$('.accordion-header').click(function(){
		var group = $(this).data('group');

		if (group !== undefined) {
			$('[data-group="'+group+'"]').each(function(){
				$(this).parent().removeClass('opened');
				$(this).siblings('.accordion-content').stop().slideUp(300);
			});
		}

		$(this).siblings('.accordion-content').stop().slideToggle(300);
		$(this).parent().toggleClass('opened');
	});

	$('.open-on-load').trigger('click');

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});