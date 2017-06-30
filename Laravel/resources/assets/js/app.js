
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.Vue = require('vue');

Vue.component('favorite', require('./components/Favorite.vue'));
const app = new Vue({
    el: '#app'
});

/**
 * Toggle User Menu if User is logged in
 */

$(document).ready(function(){
	$('.topbar__mfm').on('click', function(){
		if( $('.user__context-menu').hasClass('context-menu--open') ) {

			$('.user__context-menu').removeClass('context-menu--open');
			$('.overlay').remove();
			$('body').removeClass('no-scroll');
		}

		else {
			$('.user__context-menu').addClass('context-menu--open');
			$('body').addClass('no-scroll').append('<div class="overlay"></div>');
		}
	});

	
	$('.profile-user__multifunctional-menu').on('click', function(){
		$('.profile-user-image__context-menu').toggleClass('context-menu--open');
	});

	/**
	* Show and hide password
	*/
	$('.input__icon-wrapper').click(function() {
		$('.toggle-password').toggleClass('icon--eye icon--password');
				
		var input = $($('.toggle-password').attr('toggle'));
		if (input.attr('type') == 'password') {
			input.attr('type', 'text');
		} else {
			input.attr('type', 'password');
		}
	});

	/**
	* Navigation tabs
	*/
	$('.navigation-tabs__item').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.navigation-tabs__item').removeClass('navigation-tabs__item--active');
		$('.navigation-tabs__title').removeClass('navigation-tabs__title--active');
		$('.navigation-tabs__content').removeClass('navigation-tabs__content--active');

		$(this).addClass('navigation-tabs__item--active');
		$(this).children('.navigation-tabs__title').addClass('navigation-tabs__title--active');
		$("#"+tab_id).addClass('navigation-tabs__content--active');
	});

	/**
	* Tooltips
	*/

	$('.tooltip').tooltipster({
		theme: 'tooltipster-shadow',
		delay: '0'
	});

	/**
	* image Slide for beachcourt detail page
	*/

	var owl = $(".slider-image__slider");

	owl.owlCarousel({
		items: 1,
		lazyLoad: true
	});
	
	$('.slider-image__navigation--left').click(function(){
		owl.trigger('prev.owl.carousel');
	});	

	$('.slider-image__navigation--right').click(function(){
		owl.trigger('next.owl.carousel');
	});
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
  	if( $('.user__context-menu').hasClass('context-menu--open') ) {

  		$('.user__context-menu').removeClass('context-menu--open');
  		$('.overlay').remove();
  		$('body').removeClass('no-scroll');
  	}

  	else {
  		$('.user__context-menu').addClass('context-menu--open');
  		$('body').addClass('no-scroll').append('<div class="overlay"></div>');
  	}
  }
});


/**
 * User Profile Page
 */

$('.profile-user-image__button').hide();

;( function( $, window, document, undefined )
{
	$( '.input-fileupload__field' ).each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.parent( 'label' ),
			labelVal = $label.html();

		$input.on( 'change', function( e )
		{
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName ) {
				$label.find( '.input-fileupload__label' ).html( fileName );
				$('.profile-user-image__button').show();
			}
				
			else
				$label.html( labelVal );
		});

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
})( jQuery, window, document );





