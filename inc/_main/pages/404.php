<?php 
$title		= '404: Página não encontrada';
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
		<?php include('inc/componentes/notfound.php'); ?>
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