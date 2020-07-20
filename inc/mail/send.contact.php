<?php

//configuracoes de envio
include("config.send.php");
//incluindo a url
include("../base/root/url.inc.php");
//include a geral
include("../base/root/geral.php");

## validacao do recaptcha
if( recaptcha ):

  //verifica var recaptcha
  if(isset($input['g-recaptcha-response']) && !empty($input['g-recaptcha-response'])):

    // Processa o envio
    include("send.inc.php");

  else:

    //cria mensagem
    $message = array(
      'title'   => 'reCaptcha vazio!',
      'desc'    => 'Por favor, preencha o reCaptcha e tente novamente.', 
      'response'  => 'error'
    );

  endif;

else:

  // Processa o envio
  include("send.inc.php");

endif;

// Controle de mensagens
if($message):
  echo '
  <script>
    $(function (){
      x++;
      if(x != 0 && x < 2){
      messageAlert(
        "'.$message["title"].'",
        "'.$message["desc"].'",
        "'.$message["response"].'"
        );
      }
    });
  </script>
  ';
else:
  //Cria menssagem de erro caso não consiga enviar
  echo '
  <script>
    $(function (){
      messageAlert(
        "Falhou!",
        "Infelizmente não conseguimos processar seu contato. Entre em contato diretamente em <a href="mailto:'.$emailContato.'" rel="nofollow" title="'.$emailContato.'">'.$emailContato.'</a>.",
        "error"
        );

    })
  </script>
  ';
endif;

?>
