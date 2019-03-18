$(document).ready(function() {

	/*-----------------------------------/
	/*	TOP NAVIGATION AND LAYOUT
	/*----------------------------------*/

	// toggle fullwidth
	$('.btn-toggle-fullwidth').on('click', function() {
		if(!$('body').hasClass('layout-fullwidth')) {
			$('body').addClass('layout-fullwidth');

		} else {
			$('body').removeClass('layout-fullwidth');
			$('body').removeClass('layout-default'); // also remove default behaviour if set
		}

		$(this).find('.lnr').toggleClass('lnr-arrow-left-circle lnr-arrow-right-circle');

		if($(window).innerWidth() < 1025) {
			if(!$('body').hasClass('offcanvas-active')) {
				$('body').addClass('offcanvas-active');
			} else {
				$('body').removeClass('offcanvas-active');
			}
		}
	});

	// needed to stop resize event propagated to jquery.flot.resize.js
	$('body').on('resize', function(e) {
		e.stopPropagation();
	});

	// toggle right sidebar
	$('.btn-toggle-rightsidebar').on('click', function() {
		if(!$('.right-sidebar').hasClass('active')) {
			$('.right-sidebar').addClass('active');
		} else {
			$('.right-sidebar').removeClass('active');
		}
	});

	var defaultLayout = '';
	
	// check if layout origin/default is minified
	if($('body').hasClass('sidebar-minified')) {
		defaultLayout = 'minified';
		$('.sidebar a[data-toggle="collapse"]').attr('data-toggle', "");
	}

	$(window).on('load', function() {
		if($(window).innerWidth() < 1025) {
			$('.btn-toggle-fullwidth').find('.icon-arrows')
			.removeClass('icon-arrows-move-left')
			.addClass('icon-arrows-move-right');
		}

		// adjust right sidebar top position
		$('.right-sidebar').css('top', $('.navbar').innerHeight());

		// if page has content-menu, set top padding of main-content
		if($('.has-content-menu').length > 0) {
			$('.navbar + .main-content').css('padding-top', $('.navbar').innerHeight());
		}

		// for shorter main content
		if($('.main').height() < $('#sidebar-nav .nav').height()) {
			$('.main').css('min-height', $('#sidebar-nav .nav').height() + 105); // 105 to cover padding and margin top
		}
	});

	$(window).on('load resize', function() {
		if($(this).innerWidth() < 1025) {
			if(defaultLayout === 'minified'){
				// remove minified sidebar mode
				$('body').removeClass('sidebar-minified'); 
				$('.brand img.logo').attr('src', 'assets/img/logo-dark.png');
				$('.sidebar a[data-toggle=""]').attr('data-toggle', "collapse");
			}
		} else if(!$('body').hasClass('layout-default')){
			$('body').removeClass('layout-fullwidth');

			if(defaultLayout === 'minified') {
				// set back to minified sidebar mode
				$('body').addClass('sidebar-minified');
				$('.brand img.logo').attr('src', 'assets/img/logo-minified-dark.png');
				$('.sidebar a[data-toggle="collapse"]').attr('data-toggle', "");
			}
		}
	});

	// search form
	$('.navbar-form.search-form input[type="text"]')
	.on('focus', function() {
		$(this).animate({
			width: '+=50px'
		}, 300);
	})
	.on('focusout', function() {
		$(this).animate({
			width: '-=50px'
		}, 300);
	});

	// adding effect to navbar dropdown menu
	$('#navbar-menu .dropdown').on('show.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).fadeIn();
	});

	$('#navbar-menu  .dropdown').on('hide.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).fadeOut();
	});


	/*-----------------------------------/
	/*	SIDEBAR NAVIGATION
	/*----------------------------------*/

	$('.sidebar a[data-toggle="collapse"]').on('click', function() {
		$(this).parent().find('.collapse').collapse('show');
		$('.sidebar .collapse').not($(this).parent().find('.collapse')).collapse('hide');
	});

	$('#sidebar-right .sidebar-scroll').slimScroll({
		height: '95%',
		wheelStep: 10,
		touchScrollStep: 50,
		color: '#cecece'
	});

	// only if layout is not minified
	if(!$('body').hasClass('sidebar-minified')) {
		$('#sidebar-nav .sidebar-scroll').slimScroll({
			height: '95%',
			wheelStep: 10,
			touchScrollStep: 50,
			color: '#cecece'
		});
	}


	/*-----------------------------------/
	/*	CONTENT MENU
	/*----------------------------------*/
	
	if( $('.content-menu').length > 0 ) {
		$('.btn-open-content-menu').on('click', function() {
			$('.content-menu-left').css('left', 0);
		});

		$('.btn-close-content-menu').on('click', function() {
			$('.content-menu-left').css('left', -300);
		});

		$('.inbox-list-message > li').on('click', function() {
			$('.content-right').show('medium');
		});

		$('.btn-close-content-right').on('click', function() {
			$('.content-right').hide('medium');
		});
	}

	
	/*-----------------------------------/
	/*	PANEL FUNCTIONS
	/*----------------------------------*/

	// panel remove
	$('.panel .btn-remove').click(function(e){

		e.preventDefault();
		$(this).parents('.panel').fadeOut(300, function(){
			$(this).remove();
		});
	});

	// panel collapse/expand
	var affectedElement = $('.panel-body');

	$('.panel .btn-toggle-collapse').clickToggle(
		function(e) {
			e.preventDefault();

			// if has scroll
			if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
				affectedElement = $('.slimScrollDiv');
			}

			$(this).parents('.panel').find(affectedElement).slideUp(300);
			$(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
		},
		function(e) {
			e.preventDefault();

			// if has scroll
			if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
				affectedElement = $('.slimScrollDiv');
			}

			$(this).parents('.panel').find(affectedElement).slideDown(300);
			$(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
		}
	);

	// panel refresh
	if( $('.btn-panel-refresh').length > 0 ) {
		$('.btn-panel-refresh').on('click', function() {
			$('.overlay-refresh').fadeIn(300);

			setTimeout( function() {
				$('.overlay-refresh').fadeOut(300);
			}, 1500);
		});
	}


	/*-----------------------------------/
	/*	PANEL SCROLLING
	/*----------------------------------*/

	if( $('.panel-scrolling').length > 0) {
		$('.panel-scrolling .panel-body').slimScroll({
			height: '430px',
			wheelStep: 2,
			color: '#cecece'
		});
	}

	if( $('#panel-scrolling-demo').length > 0) {
		$('#panel-scrolling-demo .panel-body').slimScroll({
			height: '175px',
			wheelStep: 2,
			color: '#cecece'
		});
	}


	/*-----------------------------------/
	/*	PANEL QUICK NOTE
	/*----------------------------------*/

	if($('.quick-note-create').length > 0) {
		$('.quick-note-create textarea, .quick-note-create input').on( 'focusin', function() {
			$(this).attr('rows', 7);
			$('.panel-quick-note').find('.panel-footer').show();
		});

		$('.quick-note-create').on( 'focusout', function() {
			$(this).find('textarea').attr('rows', 1);
			$(this).find('.panel-footer').hide();
		});
	}

	if($('.quick-note').length > 0) {
		$('.quick-note').on( 'click', function() {
			$('#quick-note-modal').modal();
		});
	}

	if($('.quick-note-edit').length > 0) {
		$('.quick-note-edit .btn-save').on( 'click', function() {
			$('#quick-note-modal').modal('hide');
		});
	}


	/*-----------------------------------/
	/*	TODO LIST
	/*----------------------------------*/

	$('.todo-list input').change( function() {
		if( $(this).prop('checked') ) {
			$(this).parents('li').addClass('completed');
		}else {
			$(this).parents('li').removeClass('completed');
		}
	});


	/*-----------------------------------/
	/* TOASTR NOTIFICATION
	/*----------------------------------*/

	if($('#toastr-demo').length > 0) {
		toastr.options.timeOut = "false";
		toastr.options.closeButton = true;
		toastr['info']('Hi there, this is notification demo with HTML support. So, you can add HTML elements like <a href="#">this link</a>');

		$('.btn-toastr').on('click', function() {
			$context = $(this).data('context');
			$message = $(this).data('message');
			$position = $(this).data('position');

			if($context === '') {
				$context = 'info';
			}

			if($position === '') {
				$positionClass = 'toast-left-top';
			} else {
				$positionClass = 'toast-' + $position;
			}

			toastr.remove();
			toastr[$context]($message, '' , { positionClass: $positionClass });
		});

		$('#toastr-callback1').on('click', function() {
			$message = $(this).data('message');

			toastr.options = {
				"timeOut": "300",
				"onShown": function() { alert('onShown callback'); },
				"onHidden": function() { alert('onHidden callback'); }
			};

			toastr['info']($message);
		});

		$('#toastr-callback2').on('click', function() {
			$message = $(this).data('message');

			toastr.options = {
				"timeOut": "10000",
				"onclick": function() { alert('onclick callback'); },
			};

			toastr['info']($message);

		});

		$('#toastr-callback3').on('click', function() {
			$message = $(this).data('message');

			toastr.options = {
				"timeOut": "10000",
				"closeButton": true,
				"onCloseClick": function() { alert('onCloseClick callback'); }
			};

			toastr['info']($message);
		});
	}


	/*-----------------------------------/
	/* BOOTSTRAP TOOLTIP INIT
	/*----------------------------------*/

	if($('[data-toggle="tooltip"]').length > 0) {
		$('[data-toggle="tooltip"]').tooltip();
	}
});

// toggle function
$.fn.clickToggle = function( f1, f2 ) {
	return this.each( function() {
		var clicked = false;
		$(this).bind('click', function() {
			if(clicked) {
				clicked = false;
				return f2.apply(this, arguments);
			}

			clicked = true;
			return f1.apply(this, arguments);
		});
	});

};


