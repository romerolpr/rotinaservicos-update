<?php 
$title = 'Teste';
$var = array(
	'title' => $title,
	'description' => $title . ' - fundada em 1997 e desde então atua nas áreas de portaria e controle de acesso, limpeza, zeladoria e conservação de condomínios residenciais, comércios e empresas em geral.',
	'key' => $title . ', terceirizados, servicos, servicos prediais, predios, ap, casa, condominio',
	'var' => $title . ', Inicio'
);
include(BASE . 'head.php');
//vet para o blog
include(VETOR . 'blog.vet.php');
?>
<script><?php include('js/maskinput.js'); ?></script>
</head>
<body>
	<!-- TOPO -->
	<?php include(BASE . 'topo.php'); ?>
	<!-- SLIDER -->
	<?php include(COMPONENTES . 'slider.php'); ?>
	<!-- conteudo -->
	<div class="anchor">
		<?php 
		include(COMPONENTES . 'about.php'); 
		include(COMPONENTES . 'home.blog.php'); 
		include(COMPONENTES . 'invite.php'); 
		?>
	</div>
	<div class="anchor">	
		<?php include(COMPONENTES . 'items.php'); ?>
	</div>
	<!-- Contato, forms -->
	<div class="effect fadeIn fix">
		<?php include(COMPONENTES . 'contact.php'); ?>
	</div>
	<!-- Footer, rodapé -->
	<?php 
	//footer e scrips
	include(BASE . 'footer.php');
	include(ROOT . 'scripts.php'); 
	?>	
	<!-- Script -->
	<script><?php include('js/script.js'); ?></script>
</body>
</html>