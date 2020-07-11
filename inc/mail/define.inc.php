<?php

## Definindo horário atual ##
$day=date('j'); 
$month=date('F'); 
$year=date('Y'); 
$clock=date('g:i a');
## rewrite month
$month=='Feb' 	? $month = 'Fev' 	: $month = $month;
$month=='Mar' 	? $month = 'Março' 	: $month = $month;
$month=='Apr' 	? $month = 'Abril' 	: $month = $month;
$month=='May' 	? $month = 'Maio' 	: $month = $month;
$month=='June' 	? $month = 'Jun' 	: $month = $month;
$month=='July' 	? $month = 'Julho' 	: $month = $month;
$month=='Aug' 	? $month = 'Ago' 	: $month = $month;
$month=='Sept' 	? $month = 'Set' 	: $month = $month;
$month=='Oct' 	? $month = 'Out' 	: $month = $month;
$month=='Dec' 	? $month = 'Dez' 	: $month = $month;
//montando o horario
$date=$day.' de '.$month.' de '.$year.', '.$clock;
$today=$date;

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
if ( $host !== DOMAIN && !$switch):

	## recaptcha on ##
	define('recaptcha', false);

else:

	## recaptcha off ##
	define('recaptcha', true);

endif;

?>