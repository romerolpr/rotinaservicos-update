<script>
  var keyscroll;
  $(window).on('scroll', function(e){
      if($(this).scrollTop() >= 100 && !keyscroll){
        $('head').append("<script src='https://www.google.com/recaptcha/api.js'><\/script>");
        $('footer').append(`<script src="https://www.googletagmanager.com/gtag/js?id=UA-163505904-1"><\/script>`);
        $('#iframe__map').append('<iframe src="<?=$mapLocation?>" height="380"><\/iframe>');
        $('head').append(`<script>$(function () {$('input[name="telefone"]').mask('(99) 9999-9999');$('input[name="telefone"]').keyup(function(){if($(this).val()[5]=="9"){$(this).mask('(99) 99999-9999');} else {$(this).mask('(99) 9999-9999');}});$('input[name="telefone_2"]').keyup(function(){if($(this).val()[5]=="9"){$(this).mask('(99) 99999-9999');} else {$(this).mask('(99) 9999-9999');}});$('input[name="valor_medio"]').keyup(function(){$(this).mask('9.999,99');});$('input[name="area_total_condominio"]').keyup(function(){$(this).mask('9.999');});});<\/script>`);
        $('head').append(`<script src="js/maskinput.js"><\/script>`);
          keyscroll = true;
        $(document).ready(function(){
          // window.dataLayer = window.dataLayer || [];
          // function gtag(){dataLayer.push(arguments);}
          // gtag('js', new Date());
          // gtag('config', 'UA-163505904-1');
          //popup
          $('.popup-box').css({'display':'flex'});
          $('body').addClass('scroll-hidden');
          $('.popup-box .close, .popup-box .opacitybox').on('click', function(){
            $('.popup-box').fadeOut(500);
            $('body').removeClass('scroll-hidden');
          });
        });
      }
  });
</script>