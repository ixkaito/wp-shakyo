'use strict';

global.jQuery = require('jquery');
global.$ = jQuery;

$('p + blockquote').hide();

$('blockquote').prev('p').on('click', function() {
  $(this).next('blockquote').toggle();
});
