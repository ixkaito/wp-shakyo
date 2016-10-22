'use strict';

global.jQuery = require('jquery');
global.$ = jQuery;

$('.file-content p + blockquote').hide();

$('.file-content blockquote').prev('p').append('<i class="fa fa-caret-down toggler"></i>');

$('.toggler').on('click', function() {
  $(this).toggleClass('fa-caret-up').parent().next('blockquote').toggle();
});

$('.js-toggle-all').on('click', function() {
  if ($(this).text() === 'Expand all') {
    $('.file-content p + blockquote').show();
    $(this).text('Collapse all');
    $('.toggler').addClass('fa-caret-up');
  } else {
    $('.file-content p + blockquote').hide();
    $(this).text('Expand all');
    $('.toggler').removeClass('fa-caret-up');
  }
});
