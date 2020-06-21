<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>

<?php
	
	//variaveis do site
	include('inc/base/root/geral.php');
	include('inc/base/root/htaccess.php');

?>

<!-- JS -->
<script>

	<?php 

	include('js/jquery.js');
	include('js/maskinput.js');

	?>
		
</script>

<!-- CSS -->
<style>

	<?php

	include('css/normalize.css');
	include('css/style.css');
	include('css/base.css');
	include('css/queries.css');
	include('css/fontawesome.css');

	?>

</style>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<meta name="description" content="<?=ucfirst($desc)?>">
<meta name="keywords" content="<?=str_replace($prepos,', ', $h1).', '.$nomeSite?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="geo.position" content="<?=$latitude.";".$longitude?>">
<meta name="geo.placename" content="<?=$cidade."-".$UF?>">
<meta name="geo.region" content="<?=$UF?>-BR">
<meta name="ICBM" content="<?=$latitude.";".$longitude?>">
<meta name="robots" content="index,follow">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta property="og:region" content="Brasil">
<meta property="og:title" content="<?=$title." - ".$nomeSite?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?=$url.$urlPagina?>">
<meta property="og:description" content="<?=$desc?>">
<meta property="og:site_name" content="<?=$nomeSite?>">
<link rel="canonical" href="<?=$url.$urlPagina?>">
<link rel="icon" href="<?=$url?>img/logo.png">
<link rel="apple-touch-icon" href="<?=$url?>img/logo.png"/>


<title><?=$title.' - '.$nomeSite?></title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163505904-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163505904-1');
</script> -->