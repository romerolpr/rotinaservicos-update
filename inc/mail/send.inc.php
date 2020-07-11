<?php


  $nome = $input['nome'];
  $telefone = $input['telefone'];
  $telefone_2 = $input['telefone_2'];
  $email = $input['email'];
  $mensagem = strlen(trim($input['mensagem']));
  $endereco_condominio = $input['endereco_condominio'];
  $area_total_condominio = $input['area_total_condominio'];
  $quantidade_apartamentos = $input['quantidade_apartamentos'];
  $valor_medio = $input['valor_medio'];

  //telefone 2
  $telefone_2 == "" || !$telefone_2 ? $telefone_2 = "Não informado" : $telefone_2 = $input['telefone_2'];

  //assunto
  $input['assunto'] == "" ? $assunto = "Orcamento de cliente" : $assunto = $input['assunto'];

  //anexo
  $anexo = $input['anexo']['tmp_name'] ? $input['anexo'] : "Sem anexo";

  //quebra sessao do recaptcha
  unset($input['g-recaptcha-response']);


// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "ASSUNTO (" . strtoupper($assunto) . ") - " . $nomeSite . ""; // Assunto da mensagem

$Body = "
<table style='font: 100% sans-serif;background-color: #efe;border-collapse: collapse;empty-cells: show;border: 1px solid #7a7;width: 800px;'>

<caption style='text-align: left;font-weight: bold;font-size: 200%;border-bottom: .2em solid #4ca;margin-bottom: 1em;'>{$nomeSite}</caption>

<thead style='display: contents;float: left;margin-bottom: 10px;'>
<tr>
<td style='text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:1em .5em;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#7a7;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top' colspan='2'>
Mensagem recebida de {$nome} em {$today} via formulário do site
</td>
</tr>
<tr>
<th colspan='2' style='font-weight: bold;'>
<a href='https://www.rotinaservicos.com/' width='150' title='rotinaservicos' alt='rotinaservicos'>
<img src='https://www.rotinaservicos.com/images/logo.png' width='130' title='rotinaservicos' alt='rotinaservicos' style='margin: 20px 0'>
</a>
</th>
</tr>
<tr>
<td style='text-align:left;padding:.5em 2em;width: 40%;'>
<font size='-1'><b>{$nomeSite} </b>&lt;rotina.servicos@gmail.com&gt;</font>
</td>
<td align='right' style='text-align:left;padding: .5em 2em;width: 60%;'>
<font size='-1'>{$today}</font>
</td>
</tr>
<tr>
<td colspan='2' style='text-align:left;padding: .5em 2em;width: 100%;'>
<font size='-1' class='recipient'>
<div class='replyto'>Responder a: {$nome} &lt;{$email}&gt;</div><div>Para: {$nome} &lt;{$email}&gt;</div>
</font>
</td>
</tr>


<tr>
<th style='text-align:left;padding: .5em 2em; font-weight: bold;'>Campos</th>
<th style='text-align:left;padding: .5em 2em; font-weight: bold;'>Respostas</th>
</tr>
</thead>
<tbody>";

foreach ($input as $key => $value):

  //resgata o name do input
  $nameInput = ucfirst(str_replace(array('_', '-'), ' ', $key));

  (is_array($value)) ? $responseInput = $anexo['name'] : $responseInput = $value;
  
  //cria o body
  $Body .= "
    <tr>
    <th style='text-align:left;padding: .5em 2em;font-weight: normal;line-height:1.75em'>{$nameInput}:</th>

    <th style='text-align:left;padding: .5em 2em;font-weight: normal;line-height:1.75em'>{$responseInput}</th>
    </tr>";

endforeach;

$Body .= "
<tr>
<td style='text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:1em .5em;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#7a7;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top' colspan='2'>
Mensagem automática enviada por - www.rotinaservicos.com em {$today}
</td>
</tr>
</tbody>
</table>";

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