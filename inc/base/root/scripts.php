<script>
  //scroll
  (function() {debounce = function(func, wait, immediate) {var timeout;return function() {var context = this,args = arguments;var later = function() {timeout = null;if (!immediate) func.apply(context, args);};var callNow = immediate && !timeout;clearTimeout(timeout);timeout = setTimeout(later, wait);if (callNow) func.apply(context, args);};};var $target = $('.anchor'),offset = $(window).height(),valitem = 0;offset=offset*8/4;function animeScroll() {$target.each(function() {var itemTop = $(this).offset().top;valitem++;if ($(document).scrollTop() > itemTop - offset) {$(this).addClass('effect fadeIn');}});}animeScroll();$(document).scroll(debounce(function() {animeScroll();}, 50));}());
  scrollHidden=null;if(scrollHidden=='scroll-hidden'){$('body').addClass('scroll-hidden');}else{$('body').removeClass('scroll-hidden');}
  var keyscroll;

  $(window).on('scroll', function(e){
      if($(this).scrollTop() >= 100 && !keyscroll){
        $('head').append("<script src='https://www.google.com/recaptcha/api.js'><\/script>");
        $('#iframe__map').append('<iframe src="<?=$mapLocation?>" height="380"><\/iframe>');
        $('head').append(`<script>$(function () {$('input[name="telefone"]').keyup(function(){if($(this).val()[5]=="9"){$(this).mask('(99) 99999-9999');} else {$(this).mask('(99) 9999-9999');}});$('input[name="telefone_2"]').keyup(function(){if($(this).val()[5]=="9"){$(this).mask('(99) 99999-9999');} else {$(this).mask('(99) 9999-9999');}});$('input[name="valor_medio"]').keyup(function(){$(this).mask('9.999,99');});$('input[name="area_total_condominio"]').keyup(function(){$(this).mask('9.999');});});<\/script>`);
          keyscroll = true;
      }
  });
</script>