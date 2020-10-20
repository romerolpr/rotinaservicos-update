<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>

<?php
	
	//variaveis do site
	include(ROOT . 'geral.php');

?>

<!-- JS -->
<script>
	<?php 
	include('js/jquery.js');
	include('js/geral.js');
	include(MAIL . 'js/message-alert.js');  
	?>	
</script>

<!-- CSS -->
<style>

	@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap');

	<?php

	include('css/normalize.css');
	include('css/style.css');
	include('css/effects.css');
	include('css/base.css');
	include('css/queries.css');
	include('css/fontawesome.css');
	include(MAIL . 'css/message-alert.css');

	?>

</style>

<?php 
$description = strip_tags($var['description']);
if (mb_strlen($description,"UTF-8") > 160):
$description = mb_substr($description, 0, 159);
$finalSpace = strrpos($description, " ");
$description = substr($description, 0, $finalSpace);
$description .= ".";
elseif (mb_strlen($description,"UTF-8") < 140 && mb_strlen($description,"UTF-8") > 130 ):
$description .= "...saiba mais.";
endif;
?>

<base href="<?=$url?>">
<meta name="description" content="<?=$description?>">
<meta name="keywords" content="<?=$var['var'].', '.$nomeSite?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="geo.position" content="<?=$latitude.";".$longitude?>">
<meta name="geo.placename" content="<?=$cidade."-".$UF?>">
<meta name="ICBM" content="<?=$latitude.";".$longitude?>">
<meta name="robots" content="index,follow">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta property="og:region" content="Brasil">
<meta property="og:title" content="<?=$var['title']." - ".$nomeSite?>">
<meta property="og:type" content="article">
<meta property="og:description" content="<?=$description?>">
<meta property="og:site_name" content="<?=$nomeSite?>">

<?php 

(!$URL[1]) ? $meta = '<meta property="og:url" content="'.$url.$urlPagina.'">' : $meta = '<meta property="og:url" content="'.$url.$link->Path.'/'.$link->Link.'">'; 

echo $meta;

?>

<link rel="canonical" href="<?=$url.$urlPagina?>">
<link rel="icon" href="<?=$url?>images/logo.png">
<link rel="apple-touch-icon" href="<?=$url?>images/logo.png"/>


<title><?=$title.' - '.$nomeSite?></title>

<script><?php include('js/header.js'); ?></script>