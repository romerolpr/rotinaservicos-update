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
		require(REQ . 'pages' . '/' .  $link->Path . '/' . $URL[1] . '.php');
	else:
		require(REQ . 'pages' . '/' . $link->Path . '/404.php');
	endif;
else: 

	$title = 'Artigos';
	$var = array(
		'title' => $title,
		'description' => $title . ' - fundada em 1997 e desde então atua nas áreas de portaria e controle de acesso, limpeza, zeladoria e conservação de condomínios residenciais, comércios e empresas em geral.',
		'key' => $title . ', terceirizados, servicos, servicos prediais, predios, ap, casa, condominio',
		'var' => $title . ', Inicio'
	);

	include 'inc/base/head.php';

?>
	</head>
	<body>
		<!-- TOPO -->
		<?php include('inc/base/topo.php'); ?>
		<!-- SLIDER -->
		<?php include('inc/componentes/slider.php'); ?>
		<!-- conteudo -->
		<div class="container">
			<div class="col-12">	
				<div class="container">
					<?php include('inc/componentes/breadcrumb.php'); ?>
					<p>Explore por todos os artigos da <?=$nomeSite?>.</p>
				</div>
			</div>
		</div>
		<!-- Footer, rodapé -->
		<?php 
		//footer e "lab"
		include('inc/base/footer.php');
		include('inc/base/root/scripts.php'); 
		?>	
		<!-- Script -->
		<script><?php include('js/script.js');?></script>
	</body>
	</html>
<?php endif; ?>