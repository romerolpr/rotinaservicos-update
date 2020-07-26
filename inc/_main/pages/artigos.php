<?php
//monta URL
if(isset($URL[1])):
	$file = $URL[1].'.php';
	$link->Path = $URL[0];
else: 
	$link->Path = null;
endif;

//armazenar todos os blogs da pasta por nome
$files = glob(REQ . 'pages/' . $URL[0] . '/*.*');
foreach ($files as $indice => $item):
	//percorre toda a pasta e monta a variável
	$Item = $files;
endforeach;

//faz a condicao
if($link->Path != null):
	//verifica se o arquivo existe
	if(in_array(REQ . 'pages/' . $link->Path . '/' . $URL[1] . '.php', $Item)):
		include(REQ . 'pages' . '/' .  $link->Path . '/' . $URL[1] . '.php');
	else:
		include(REQ . 'pages' . '/' . $link->Path . '/404.php');
	endif;
else: 

	$title = 'Artigos';
	$var = array(
		'title' => $title,
		'description' => $title . ' - fundada em 1997 e desde então atua nas áreas de portaria e controle de acesso, limpeza, zeladoria e conservação de condomínios residenciais, comércios e empresas em geral.',
		'key' => $title . ', terceirizados, servicos, servicos prediais, predios, ap, casa, condominio',
		'var' => $title . ', Inicio'
	);

	include (BASE . 'head.php');

?>
</head>
<body>
	<!-- TOPO -->
	<?php include(BASE . 'topo.php'); ?>
	<!-- SLIDER -->
	<?php include(COMPONENTES . 'slider.php'); ?>
	<!-- conteudo -->
	<div class="container">
		<div class="col-12">	
			<div class="container">
				<?php include(COMPONENTES . 'breadcrumb.php'); ?>
				<p>Explore por todos os artigos da <?=$nomeSite?>.</p>
				<br>
				<div class="content-item">

					<?php

					foreach ($vetBlog as $key => $valor):

						$titleBlog 		= $valor['name'];
						$descBlog 		= $valor['description'];
						$imageBlog 		= $valor['cover'];
						$publishedBlog 	= $valor['published'];
						$pathBlog 		= $url . 'images/artigos/' . $imageBlog; //caminho para as imagens
						$urlBlog		= $url . 'artigos/' . $valor['url'];
						$autorBlog      = $valor['autor'];

					?>

					<div class="default-item">
						<a href="<?=$urlBlog?>" title="<?=$titleBlog?>">
							<div class="cover-item">
								<img src="<?=$pathBlog?>" title="<?=$titleBlog?>" alt="<?=$titleBlog?>">
							</div>
							<div class="txt-item">
								<span class="published"><?=$publishedBlog?></span>
								<span class="autor"><?=$autorBlog?></span>
								<h2><?=$titleBlog?></h2>
								<p><?=$descBlog?></p>
								<a href="<?=$urlBlog?>" title="Continuar lendo">
									<span class="btn">Continuar lendo</span>
								</a>
							</div>
							
						</a>
					</div>

					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
	<!-- Footer, rodapé -->
	<?php 
	//footer e "lab"
	include(BASE . 'footer.php');
	include(ROOT . 'scripts.php'); 
	?>	
	<!-- Script -->
	<script><?php include('js/script.js');?></script>
</body>
</html>
<?php endif; ?>