<script>
  // Disparando função através do scroll
  var keyscroll;
  $(window).on('scroll', function(e){
    // criando uma condição se a posição na tela for maior que 300px e o valor da variavel  for diferente de true executa
      if($(this).scrollTop() >= 100 && !keyscroll){
        $('head').append("<script src='https://www.google.com/recaptcha/api.js'><\/script>");
        $('#iframe__map').append('<iframe src="<?=$mapLocation?>" height="380"><\/iframe>');
          // aleterando o valor da variável para que não dispare novamente a função
          keyscroll = true;
      }
  });
</script>