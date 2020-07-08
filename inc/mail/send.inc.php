<?php


  //base
  $nome = $input['nome'];
  $telefone = $input['telefone'];
  $telefone_2 = $input['telefone_2'];
  $email = $input['email'];
  $mensagem = strlen(trim($input['mensagem']));
  $anexo = $input['anexo']['tmp_name'] ? $input['anexo'] : "Sem anexo";

  //cliente
  $endereco_condominio = $input['endereco_condominio'];
  $area_total_condominio = $input['area_total_condominio'];
  $quantidade_apartamentos = $input['quantidade_apartamentos'];
  $valor_medio = $input['valor_medio'];
  $anexo = $input['anexo']['tmp_name'] ? $input['anexo'] : "Sem anexo";

  //telefone 2
  $telefone_2 == "" or !$telefone_2 ? $telefone_2 = "Não informado" : $telefone_2 = $input['telefone_2'];

  //assunto
  $input['assunto'] == "" ? $assunto = "Orcamento de cliente" : $assunto = $input['assunto'];


// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "ASSUNTO (" . strtoupper($assunto) . ") - " . $nomeSite . ""; // Assunto da mensagem

$Body = '

  <style>
    body, td, div, p, a, input {
      font-family: arial, sans-serif;
    }
  </style>
  <div class="bodycontainer">
    <div class="maincontainer">
      <table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td><font size="+1"><b>ROTINA SERVIÇOS: Formulário de contato</b></font><br></td></tr></tbody></table>
      <hr>
      <tbody>
      <tr><td><font size="-1"><b>ROTINA SERVIÇOS </b>&lt;rotina.servicos@gmail.com&gt;</font></td><td align="right"><font size="-1">'.$data_hoje.'</font></td></tr>
      <tr><td colspan="2" style="padding-bottom: 4px;"><font size="-1" class="recipient"><div class="replyto">Responder a: '.$nome.' &lt;'.$email.'&gt;</div><div>Para: '.$nome.' &lt;'.$email.'&gt;</div></font></td></tr>
      <hr>
      </tbody>
      <div style="overflow: hidden;"><font size="-1"><table style="border-collapse:collapse;border-spacing:0;border-color:#761919">
      <tbody><tr>
      <th style="font-family:Arial,sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;vertical-align:top;text-align:center" colspan="2">
      <a href="https://www.rotinaservicos.com/" width="150" title="rotinaservicos" alt="rotinaservicos">
        <img src="https://static.wixstatic.com/media/a127fb_44ac34601ebc4ec781943876ab9e9894~mv2.jpg/v1/fill/w_440,h_413,al_c,lg_1,q_80/LOGO%20ATUAL.webp" width="150" title="rotinaservicos" alt="rotinaservicos">
      </a>
      </th>
      </tr>
      <tr>
      <th style="font-family:Arial,sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;border-top-width:1px;border-bottom-width:1px;vertical-align:top;text-align:center" colspan="2">
      Mensagem recebida de '.$nome.', via formulário do site.
      </th>
      </tr>
      <tr></tr>';

      foreach ($input as $key => $value):

        //resgata o name do input
        $nameInput = strtoupper(str_replace(array('_', '-'), ' ', $key));

        (is_array($value)) ? $responseInput = $anexo['name'] : $responseInput = $value;
        
        //cria o body
        $Body .= "
            <tr>
              <td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top;border-right:1px solid #ccc;'>
                <b>" . $nameInput . ": </b>
              </td>  
              <td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top'>". $responseInput ."</td>
              </tr>";

      endforeach;


    $Body .= '<tr>
      <td style="text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top" colspan="2">
      Mensagem automática enviada por - rotinaservicos.com em '.$data_hoje.'
      </td>
      </tr>
      <tr>
      <td style="text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top" colspan="2">
      <a href="https://www.rotinaservicos.com/">https://www.rotinaservicos.com/</a>
      </td>
      </tr>
      </tbody></table>
      <img src="https://static.wixstatic.com/media/a127fb_44ac34601ebc4ec781943876ab9e9894~mv2.jpg/v1/fill/w_440,h_413,al_c,lg_1,q_80/LOGO%20ATUAL.webp" alt="" width="1" height="1" border="0" style="height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important"></font></div>
    </div>
  </div>

  ';  // Texto da mensagem

$mail->Body = $Body;

$emailContato = 'rotina.servicos@gmail.com';

// DADOS DO DESTINATÁRIO
$mail->AddAddress($emailContato, $nomeSite); // Define qual conta de email receberá a mensagem
//$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
//$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
//$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta

//checa anexos
if (isset($anexo) && !empty($anexo)):
  $mail->AddAttachment($anexo['tmp_name'], $anexo['name']); // Anexo
endif;

// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
// Exibe uma mensagem de resultado do envio (sucesso/erro)
if($enviado):
  
  //cria mensagem
  $message = array(
    'title'   => 'Deu certo!',
    'desc'    => 'Seu contato foi enviado com sucesso. Em breve entraremos em contato ', 
    'response'  => 'success'
  );

else:

  //cria mensagem
  $message = array(
    'title'   => 'Algo deu errado!',
    'desc'    => 'Infelizmente não foi possível enviar seu contato. Tente novamente mais tarde.', 
    'response'  => 'error'
  );

endif;