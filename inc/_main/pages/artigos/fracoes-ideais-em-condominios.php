<?php include(COMPONENTES . 'blog.head.php');?>
</head>
<body>
	<!-- TOPO -->
	<?php include(BASE . 'topo.php'); ?>
	<!-- SLIDER -->
	<?php include(COMPONENTES . 'slider.php'); ?>
	<!-- conteudo -->

	<div class="anchor">
		
		<section class="section">

			<div class="container">
				
				<article class="article">

					<?php include(COMPONENTES . 'breadcrumb.php'); ?>

					<h2><?=$title?></h2>

					<?php include(COMPONENTES . 'share-on.php'); ?>

					<p class="autor">
						<strong>De <?=$autor?>, em São Paulo</strong>
						<br>
						<span><?=$published?></span>
					</p>

					<?php include(COMPONENTES . 'thumb.php') ?>

					<p>Dando prosseguimento ao tema tratado no post anterior, “O que é área comum e o que é área privativa” (<a href="<?=$url?>artigos/area-comum-e-area-privativa" class="link">leia aqui</a>), iremos hoje abordar o tema da fração ideal em condomínios, sua definição e implicações.</p>

					<p>O conceito de fração ideal é relativamente antigo, presente já na <a href="https://www.jusbrasil.com.br/topicos/11326133/artigo-32-da-lei-n-4591-de-16-de-dezembro-de-1964" class="link" target="_blank" rel="nofollow">lei 4.561/64</a>, também chamada de Lei de Condomínios, tendo nesta também sua definição, em seu Art. 1º, § 2, “A cada unidade caberá, como parte inseparável, uma fração ideal do terreno e coisas comuns, expressa sob forma decimal ou ordinária”.</p>

					<p>Outro parágrafo desta lei, também fundamental para o entendimento da fração ideal, consta em seu Art. 12º, § 1, “Salvo disposição em contrário na Convenção, a fixação da quota no rateio corresponderá à fração ideal de terreno de cada unidade”. A partir desta leitura, obtemos duas importantes informações: 1) A lei sinaliza que a fração ideal é o método por ela adotado como o mais indicado para a divisão de cotas de despesas no condomínio e; 2) A lei dá autonomia para que cada condomínio delibere sobre a forma de divisão que julgar melhor, devendo esta constar em sua Convenção.</p>

					<p>Outro parágrafo desta lei, também fundamental para o entendimento da fração ideal, consta em seu Art. 12º, § 1, “Salvo disposição em contrário na Convenção, a fixação da quota no rateio corresponderá à fração ideal de terreno de cada unidade”. A partir desta leitura, obtemos duas importantes informações: 1) A lei sinaliza que a fração ideal é o método por ela adotado como o mais indicado para a divisão de cotas de despesas no condomínio e; 2) A lei dá autonomia para que cada condomínio delibere sobre a forma de divisão que julgar melhor, devendo esta constar em sua Convenção.</p>

					<p>Vale salientar que, apesar da legislação indicar a fração ideal como método de divisão, nem todos os condôminos a consideram a forma mais justa. Obviamente, cada condomínio possui particularidades que podem ou não tornar este método mais ou menos acertado. Moradores de coberturas podem alegar que o uso dos espaços comuns por parte deles é idêntico ao dos demais moradores, utilizando os mesmo serviços de limpeza, jardinagem e portaria, etc, não sendo assim “justo” pagar a mais por isso.</p>

					<p>Por outro lado, ao instituir-se a cobrança proporcional pela área dos imóveis, aquele morador proprietário de um apartamento ou sala maior possui igualmente um patrimônio mais valioso em relação aos demais condôminos, portanto, dono de maior parte do condomínio em si, e, assim sendo, seria também correto que este pagasse um valor mais alto. É um tema complexo e que gera muito debate, e, acertadamente, nossa legislação permite que cada condomínio busque soluções que atendam da melhor maneira os seus moradores.</p>

					<p>Nos próximos artigos, iremos tratar de forma detalhada como calcular a cota correspondente da fração ideal do seu condomínio.</p>

					<?php include(COMPONENTES . 'share-on.php'); ?>

					<br class="clearfix">	

					<?php $related=true; include(COMPONENTES . 'blog.inc.php'); ?>	

					<?php include(COMPONENTES . 'blog.local.php'); ?>			


				</article>

				<div class="aside">
					<?php $related=false; include(COMPONENTES . 'blog.inc.php'); ?>
				</div>

			</div>

		</section>

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