<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>

<?php
	
	//variaveis do site
	include(ROOT . 'geral.php');

?>

<!-- JS -->
<script><?php include('js/jquery.js'); ?></script>

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

<base href="<?=$url?>">
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
<meta property="og:description" content="<?=$var['description']?>">
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