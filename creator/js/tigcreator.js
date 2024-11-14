$(window).on('load', function () {

	/* notice
	-------------------------------------------------- */
	$('.p_notice').on('click', function () {
		$('.p_notice').fadeOut();
		$('body').removeClass('js_modal');
	});

	/* navigation
	-------------------------------------------------- */
	$('#hamburger').on('click', function () {
		$(this).toggleClass('js_active');
		$('#navigation').fadeToggle();
	});

	$('.l_navigation_menu li a').on('click', function () {
		$('#hamburger').toggleClass('js_active');
		$('#navigation').fadeToggle();
	});

	/* hero
	-------------------------------------------------- */
	$('#hero').addClass('js_active');
	$animate.beginElement();

	/* video
	-------------------------------------------------- */
	$('.p_tutorial_image').on('click', function () {
		$('.p_tutorial_video').fadeToggle();
		$('.p_tutorial_video video').get(0).play();
		$('body').toggleClass('js_modal');
	});

	$('.p_tutorial_video_close').on('click', function () {
		$('.p_tutorial_video').fadeToggle();
		$('.p_tutorial_video video').get(0).pause();
		$('body').toggleClass('js_modal');
	});

	/* cms
	-------------------------------------------------- */
	$('.p_function_cms_open').on('click', function () {
		$('.p_function_cms').fadeToggle();
		$('body').toggleClass('js_modal');
	});

	$('.p_function_cms_close').on('click', function () {
		$('.p_function_cms').fadeToggle();
		$('body').toggleClass('js_modal');
	});

	/* faq
	-------------------------------------------------- */
	$('#faq_list li h3').on('click', function () {
		$(this).toggleClass('js_active');
		$(this).next('p').slideToggle();
	});

	/* anchorLink
	-------------------------------------------------- */
	$('a[href^="#"]').on('click', function () {
		var speed = 500;
		var href= $(this).attr('href');
		var target = $(href == '#' || href == '' ? 'html' : href);
		var position = target.offset().top;
		$('html, body').animate({scrollTop:position}, speed, 'swing');
		return false;
	});

	/* animation
	-------------------------------------------------- */
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();

	/* animation_fadeIn
	-------------------------------------------------- */
	$('.c_animation_fadeIn').each(function () {
		var objectPosition = $(this).offset().top;
		if (scroll > objectPosition - windowHeight + 100) {
			$(this).addClass('js_active');
		}
	});

	/* animation_splitObject
	-------------------------------------------------- */
	$('.c_animation_splitObject').each(function () {
		var objectArray = $(this).children();
		var delay = '';
		$.each(objectArray, function (index) {
			delay = index / 5 + 's';
			$(this).css('animation-delay', delay);
		});
		var objectPosition = $(this).offset().top;
		if (scroll > objectPosition - windowHeight + 100) {
			$(this).addClass('js_active');
		}
	});

	/* scroll
	-------------------------------------------------- */
	$(window).on('scroll', function () {

		/* animation
		-------------------------------------------------- */
		var windowHeight = $(window).height();
		var scroll = $(window).scrollTop();

		/* animation_fadeIn
		-------------------------------------------------- */
		$('.c_animation_fadeIn').each(function () {
			var objectPosition = $(this).offset().top;
			if (scroll > objectPosition - windowHeight + 100) {
				$(this).addClass('js_active');
			}
		});

		/* animation_splitObject
		-------------------------------------------------- */
		$('.c_animation_splitObject').each(function () {
			var objectPosition = $(this).offset().top;
			if (scroll > objectPosition - windowHeight + 100) {
				$(this).addClass('js_active');
			}
		});
	});
});
