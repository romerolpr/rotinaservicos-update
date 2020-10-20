<?php

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