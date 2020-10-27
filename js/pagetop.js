$(function() {
  'use strict';
  
  $('#page_top a').on('click', function() {
    $('html, body').animate({scrollTop:0},600);
  });
});