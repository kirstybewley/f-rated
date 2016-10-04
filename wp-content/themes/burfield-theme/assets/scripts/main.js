(function ($, root, undefined) {

	$(function () {

		'use strict';

    $('.slick').slick({
      arrows: false,
      dots: true,
    });

    $('#mobile-menu-button').click(function(){
      $('html').toggleClass('mobile-menu-open');
      $(this).find('.hamburger').toggleClass('open');
      $('#page, .mobile-menu').toggleClass('open');
    });

	});

})(jQuery, this);
