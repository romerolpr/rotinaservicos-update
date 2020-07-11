<?php
include('inc/base/root/geral.php');
if(!$tabela) header('location:http://www.rotinaservicos.com');

//simulando valores
$nome 		= 'Nome';
$email      = 'email@email.com';
$today  	= '1 de Maio de 2020, 00:00';
$anexo  	= array('name' => 'anexo');
$input		= array('nome' => 'João Teste','email' => $email,'mensagem' => 'Olá, venho por meio deste pedir uma oportunidade de emprego para trabalhar na Rotina Serviços Terceirizados, possuo experiencia como porteiro 6x1 e ajudante de pedreiro. Boa noite, aguardo resposta. Olá, venho por meio deste pedir uma oportunidade de emprego para trabalhar na Rotina Serviços Terceirizados, possuo experiencia como porteiro 6x1 e ajudante de pedreiro. Boa noite, aguardo resposta.');

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
<th colspan='2' style='font-weight: bold;'>
<a href='https://www.rotinaservicos.com/' width='150' title='rotinaservicos' alt='rotinaservicos'>
<img src='https://static.wixstatic.com/media/a127fb_44ac34601ebc4ec781943876ab9e9894~mv2.jpg/v1/fill/w_440,h_413,al_c,lg_1,q_80/LOGO%20ATUAL.webp' width='100' title='rotinaservicos' alt='rotinaservicos' style='margin: 20px 0'>
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

echo $Body;