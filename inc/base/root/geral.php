<?php 

//definindo url padrão
$url='http://'.$_SERVER["HTTP_HOST"];
$explode=explode('/',$_SERVER["REQUEST_URI"]);
$uri=$explode[1];
if($_SERVER["HTTP_HOST"]=='127.0.0.1'||$_SERVER["HTTP_HOST"]=='localhost'){
	$url='http://'.$_SERVER["HTTP_HOST"].'/'.$uri.'/';
} else {
	$url='http://'.$_SERVER["HTTP_HOST"].'/';
}

//variaveis globais
$nomeSite				= "Rotina Serviços Terceirizados";
$sloganSite				= "Terceirizar é economizar!";
$ddd 					= "11";
$contatoEmail			= "contato@rotinaservicos.com";
// $contatoEmail		= "pblucasromero@gmail.com";
$contatoAddress			= "R. Dr. Edgar Garcia Vieira 171";
$contatoCep				= "03510-040";
$UF						= "SP";
$cidade					= "São Paulo";
$bairro					= "Vila Matilde";
$latitude				= '-23.5358632';
$longitude				= '-46.5331596';
$mapLocation			= 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1828.956114093623!2d-46.53296648095091!3d-23.535659096461792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2df134e6cc74676d!2sRotina%20Servi%C3%A7os%20Terceirizados!5e0!3m2!1spt-BR!2sbr!4v1582583413456!5m2!1spt-BR!2sbr';
$urlPagina 				= end($explode);
$urlPagina	 			= str_replace('.php','',$urlPagina);
$urlPagina 				== "index"? $urlPagina= "" : "";

//google
$Key = '6Lfn2-QUAAAAAPnZO6NWUqHYbKGlYCh5_NEblZXZ';
$secret = '6Lfn2-QUAAAAACIdwm0r86XCfCTWhSYC_d70QS8P';

//menu
include 'inc/base/menu.php';

//canais
include 'inc/base/canais.php';

//telefones
include 'inc/base/fone.php';

//Whatsapp do site
$text					= 'Olá, Gostaria de saber mais sobre a'; // mensagem do whatsapp
$whatsapp 				= array('' . $ddd . '994210145', $text.' '.$nomeSite . ' - ' . $sloganSite, false);

//esconde erros
error_reporting(0);
ini_set(“display_errors”, 0 );

?>