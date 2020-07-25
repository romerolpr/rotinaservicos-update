<?php include(COMPONENTES . 'blog.head.php'); ?>
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

					<p>Nossa primeira postagem tratará sobre um tema que pode gerar certa confusão em condôminos, em especial àqueles que tenham menos familiaridade com os termos utilizados em incorporações imobiliárias.</p>

					<p>Para um melhor entendimento destes termos, devemos analisar o que diz o chamado Novo Código Civil (<a href="https://www.camara.leg.br/proposicoesWeb/prop_mostrarintegra?codteor=247357&filename" class="link" target="_blank" rel="nofollow" title="Lei Federal 10.406/02">Lei Federal 10.406/02</a>) que, em seus artigos que se referem à condomínios, modificaram partes da antiga lei que regia esse tema (<a href="https://www.jusbrasil.com.br/topicos/11326133/artigo-32-da-lei-n-4591-de-16-de-dezembro-de-1964" class="link" target="_blank" rel="nofollow" title="Lei 4.561/64">Lei 4.561/64</a>), também conhecida como Lei dos Condomínios. Vale lembrar que esta continua valendo para casos em que o Código Civil não delibere. Vamos adiante.</p>

					<p>Em seu art. 1.331, (<a href="https://www.jusbrasil.com.br/topicos/10646451/artigo-1331-da-lei-n-10406-de-19-de-janeiro-de-2002" class="link" target="_blank" rel="nofollow" title="Artigo 1.331">Artigo 1.331</a>) o Código Civil dispõe que as áreas privativas podem ser livremente utilizadas por seus proprietários, podendo estas também vir a ser alugadas, conforme cada necessidade ou disposição de seu possuidor. As áreas privativas agregam todas as áreas que pertencem a uma unidade (habitacional ou comercial), tendo seu uso exclusivo por seu proprietário ou locatário, inclusive vagas de estacionamento e outros ambientes, como despensas e depósitos. A metragem total é delimitada pela face das paredes externas das unidades.</p>

					<p>Não devemos confundir área privativa com área útil, em que se excluem a área das paredes, portanto, demonstrando com exatidão a metragem na qual o proprietário poderá efetivamente utilizar e mobiliar.</p>

					<p>Já as áreas comuns se referem à todas aquelas que podem ser utilizadas por todos os moradores, como hall, circulações, churrasqueira, salão de festas e jogos, piscina, entre outros. Neste mesmo Art. 1.331 do Código Civil, § 2º, o texto diz ainda que “O solo, a estrutura do prédio, o telhado, a rede geral de distribuição de água, esgoto, gás e eletricidade, a calefação e refrigeração centrais, e as demais partes comuns, inclusive o acesso ao logradouro público, são utilizados em comum pelos condôminos, não podendo ser alienados separadamente, ou divididos”. Desta forma, fica explícito que, não apenas os ambientes, mas toda a estrutura e instalações do edifício pertencem a todos os moradores, sendo estes também responsáveis por sua conservação e manutenção.</p>

					<p>A área total de cada unidade corresponderá à soma da área privativa mais a fração ideal de cada unidade, ou seja, uma fração decimal de toda a área comum do condomínio que pertence a cada unidade. Nosso próximo post tratará especificamente sobre o que é a fração ideal em e suas implicações.</p>

					
					<?php include(COMPONENTES . 'share-on.php'); ?>

					<br class="clearfix">	

					<?php 
					$related=true; 
					include(COMPONENTES . 'blog.inc.php'); 
					?>	

					<?php include(COMPONENTES . 'blog.local.php'); ?>			


				</article>

				<div class="aside">
					<?php 
					$related=false; 
					include(COMPONENTES . 'blog.inc.php'); 
					?>
				</div>

			</div>

			<div class="clearfix"></div>

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