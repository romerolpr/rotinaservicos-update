<?php 
$title		= 'Início';
$desc       = ''.$title.' - fundada em 1997 e desde então atua nas áreas de portaria e controle de acesso, limpeza, zeladoria e conservação de condomínios residenciais, comércios e empresas em geral.';
$key        = ''.$title.', terceirizados, servicos, servicos prediais, predios, ap, casa, condominio';
$var        = ''.$title.',Inicio';
include 'inc/base/head.php';

?>
</head>
<body>
	<!-- TOPO -->
	<?php include('inc/base/topo.php'); ?>
	<!-- SLIDER -->
	<?php include('inc/componentes/slider.php'); ?>
	<!-- conteudo -->
	<div class="content">
		<div class="anchor">
			<?php 
			include('inc/componentes/about.php'); 
			include('inc/componentes/invite.php'); 
			?>
		</div>
		<div class="anchor">	
			<?php include('inc/componentes/items.php'); ?>
		</div>
		<!-- Contato, forms -->
		<div class="anchor">
			<?php include('inc/componentes/contact.php'); ?>
		</div>
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