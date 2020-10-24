<?php

## rewrite month
(date('F')=='Feb') ? $month = 'Fev' : $month = date('F');
(date('F')=='Mar') ? $month = 'Março' : $month = date('F');
(date('F')=='Apr') ? $month = 'Abril' : $month = date('F');
(date('F')=='May') ? $month = 'Maio' : $month = date('F');
(date('F')=='June') ? $month = 'Jun' : $month = date('F');
(date('F')=='July') ? $month = 'Julho' : $month = date('F');
(date('F')=='Aug') ? $month = 'Ago' : $month = date('F');
(date('F')=='Sept') ? $month = 'Set' : $month = date('F');
(date('F')=='Oct') ? $month = 'Out' : $month = date('F');
(date('F')=='Dec') ? $month = 'Dez' : $month = date('F');

//montando o horario
$date = date('j').' de '.$month.' de '.date('Y').', '.date('g:i a');
$today = $date;

## Deve conter todas as variáveis do site para envio de email ##
define('COMPANY', 'Rotina Serviços Terceirizados');
define('SLOGAN', 'Terceirizar é economizar');
define('EMAIL_USER', 'Y29udGF0b0Byb3RpbmFzZXJ2aWNvcy5jb20=');
define('EMAIL_PASS', 'WVBHYWRaIXU=');
//email principal para envio, destinatario
define('EMAIL_PRINCIPAL', 'contato@rotinaservicos.com');
define('EMAIL_DESTINATARIO', 'rotina.servicos@gmail.com');
define('DOMAIN', 'rotinaservicos.com');

## Deve conter todas var da host ##
define('HOST', 'smtp.hostinger.com.br');
define('PORT', 587);

## recuperando o host
($host !== DOMAIN && !$switch) ? define('recaptcha', false) : define('recaptcha', true);

?>