'use strict';

global.jQuery = require('jquery');
global.$ = jQuery;

$('p + blockquote').hide();

$('blockquote').prev('p').append('<i class="fa fa-caret-down toggler"></i>');

$('.toggler').on('click', function() {
  $(this).toggleClass('fa-caret-up').parent().next('blockquote').toggle();
});

$('.js-toggle-all').on('click', function() {
  $('p + blockquote').show();
});
