<?php
//montar nome da página
foreach ($vetBlog as $key => $value):
	//percorre para definir o nome
	if($value['url'] == $link->Link):
		//define as variáveis da página
		$title 		= $value['name'];
		$desc 		= $value['description'];
		$autor 		= $value['autor'];
		$image 		= $value['cover'];
		$published 	= $value['published'];
		$path 		= 'images/artigos/'; //caminho para as imagens
	endif;
endforeach;
//faz o reajuste da description
$desc = strip_tags($desc);
if (mb_strlen($desc, "UTF-8") > 160):
	$desc = mb_substr($desc, 0, 159);
	$final = strrpos($desc, " ");
	$desc = substr($desc, 0, $final);
	$desc .= ".";
elseif (mb_strlen($desc, "UTF-8") < 140 && mb_strlen($desc, "UTF-8") > 130 ):
	$desc .= "... Saiba mais.";
endif;
$var = array(
	'title' => $title,
	'description' => $title . ' - ' . $desc,
	'key' => $title . ', terceirizados, servicos, servicos prediais, predios, ap, casa, condominio',
	'var' => $title . ', Inicio',
	'autor' => $autor
);
//inclui a head
include(BASE . 'head.php');
?>