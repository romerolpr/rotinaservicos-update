<?php 
$autor	= 'Bruno Romero';
$title	= '404: Artigo não encontrado';
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

	<div class="anchor">
		
		<section class="section">

			<div class="container">
				
				<article class="article-full">

					<?php include('inc/componentes/breadcrumb.php'); ?>

					<h2><?=$title?></h2>

					<p>Oops! Parece que o artigo que você está procurando não existe no site. <a href="<?=$url?>artigos" title="Explorar mais artigos" class="link">Explorar mais artigos</a></p>

					<br class="clearfix">				

				

				</article>

			</div>

		</section>

	</div>
	
	<!-- Footer, rodapé -->
	<?php 
	//footer e scrips
	include('inc/base/footer.php');
	include('inc/base/root/scripts.php'); 
	?>	
	<!-- Script -->
	<script><?php include('js/script.js'); ?></script>
</body>
</html>