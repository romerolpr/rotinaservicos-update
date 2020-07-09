<?php
include('inc/base/root/geral.php');
if(!$tabela) header('location:http://www.rotinaservicos.com');

//simulando valores
$nome 		= 'Nome';
$email      = 'email@email.com';
$today  	= '1 de Maio de 2020, 00:00';
$anexo  	= array('name' => 'anexo');
$input		= array('nome' => 'João Teste','email' => $email,'mensagem' => 'Teste de mensagem');

$Body = "
<table style='font: 100% sans-serif;background-color: #efe;border-collapse: collapse;empty-cells: show;border: 1px solid #7a7;width: 800px;'>

<caption style='text-align: left;font-weight: bold;font-size: 200%;border-bottom: .2em solid #4ca;margin-bottom: 1em;'>{$nomeSite}</caption>

<thead style='display: contents;float: left;margin-bottom: 10px;'>
<tr>
<td style='text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:1em .5em;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#7a7;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top' colspan='2'>
Mensagem recebida de {$nome} às {$today} via formulário do site
</td>
</tr>
<tr>
<th colspan='2' style='font-weight: bold;padding-left: .5em;'>
<a href='https://www.rotinaservicos.com/' width='150' title='rotinaservicos' alt='rotinaservicos'>
<img src='https://static.wixstatic.com/media/a127fb_44ac34601ebc4ec781943876ab9e9894~mv2.jpg/v1/fill/w_440,h_413,al_c,lg_1,q_80/LOGO%20ATUAL.webp' width='100' title='rotinaservicos' alt='rotinaservicos' style='margin: 20px 0'>
</a>
</th>
</tr>
<tr>
<td style='text-align:left;padding-right: .5em;padding:.5em .5em .5em 3em;width: 50%;'>
<font size='-1'><b>{$nomeSite} </b>&lt;rotina.servicos@gmail.com&gt;</font>
</td>
<td align='right' style='text-align:left;padding-right: .5em;padding:.5em .5em .5em 0;width: 50%;'>
<font size='-1'>{$today}</font>
</td>
</tr>
<tr>
<td colspan='2' style='text-align:left;padding-right: .5em;padding:.5em .5em .5em 3em;width: 100%;'>
<font size='-1' class='recipient'>
<div class='replyto'>Responder a: {$nome} &lt;{$email}&gt;</div><div>Para: {$nome} &lt;{$email}&gt;</div>
</font>
</td>
</tr>

<hr>
<tr>
<th style='text-align:left;padding: 1em 0 .5em 3em;padding-left:3em;font-weight: bold;'>Campos</th>
<th style='text-align:left;padding: 1em 3em .5em 0;font-weight: bold;'>Respostas</th>
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
    <th style='text-align:left;padding: .5em 3em;font-weight: normal;'>{$nameInput}:</th>
    <th style='text-align:left;padding: .5em 3em .5em 0;font-weight: normal;'>{$responseInput}</th>
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

echo $Body;