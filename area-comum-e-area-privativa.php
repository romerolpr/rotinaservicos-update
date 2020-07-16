<?php 
$parent 	= 'Blog';
$autor		= 'Bruno Romero';
$title		= 'O que é área comum e o que é área privativa?';
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

	<div class="anchor">
		
		<section class="section">

			<div class="container">
				
				<article class="article">


					<p>Publicado em 11 de Ago de 2016</p>

					<h2><?=$title?></h2>

					<?php include('inc/componentes/share-on.php'); ?>


					<p>Nossa primeira postagem tratará sobre um tema que pode gerar certa confusão em condôminos, em especial àqueles que tenham menos familiaridade com os termos utilizados em incorporações imobiliárias.</p>

					<p>Para um melhor entendimento destes termos, devemos analisar o que diz o chamado Novo Código Civil (Lei Federal 10.406/02) que, em seus artigos que se referem à condomínios, modificaram partes da antiga lei que regia esse tema (Lei 4.561/64), também conhecida como Lei dos Condomínios. Vale lembrar que esta continua valendo para casos em que o Código Civil não delibere. Vamos adiante.</p>

					<p>Em seu art. 1.331, o Código Civil dispõe que as áreas privativas podem ser livremente utilizadas por seus proprietários, podendo estas também vir a ser alugadas, conforme cada necessidade ou disposição de seu possuidor. As áreas privativas agregam todas as áreas que pertencem a uma unidade (habitacional ou comercial), tendo seu uso exclusivo por seu proprietário ou locatário, inclusive vagas de estacionamento e outros ambientes, como despensas e depósitos. A metragem total é delimitada pela face das paredes externas das unidades.</p>

					<p>Não devemos confundir área privativa com área útil, em que se excluem a área das paredes, portanto, demonstrando com exatidão a metragem na qual o proprietário poderá efetivamente utilizar e mobiliar.</p>

					<p>Já as áreas comuns se referem à todas aquelas que podem ser utilizadas por todos os moradores, como hall, circulações, churrasqueira, salão de festas e jogos, piscina, entre outros. Neste mesmo Art. 1.331 do Código Civil, § 2º, o texto diz ainda que “O solo, a estrutura do prédio, o telhado, a rede geral de distribuição de água, esgoto, gás e eletricidade, a calefação e refrigeração centrais, e as demais partes comuns, inclusive o acesso ao logradouro público, são utilizados em comum pelos condôminos, não podendo ser alienados separadamente, ou divididos”. Desta forma, fica explícito que, não apenas os ambientes, mas toda a estrutura e instalações do edifício pertencem a todos os moradores, sendo estes também responsáveis por sua conservação e manutenção.</p>

					<p>A área total de cada unidade corresponderá à soma da área privativa mais a fração ideal de cada unidade, ou seja, uma fração decimal de toda a área comum do condomínio que pertence a cada unidade. Nosso próximo post tratará especificamente sobre o que é a fração ideal em e suas implicações.</p>

					<br class="clearfix">
					<div class="tags">
						<span>#rotinaservicos</span>
						<span>#terceirizareeconomizar</span>
						<span>#areacomum</span>
						<span>#areaprivativa</span>
						<span>#brunoromero</span>
					</div>
					<br class="clearfix">

					

					<?php include('inc/componentes/related.php'); ?>

				</article>

				<aside class="aside">
					<ul class="nav-aside">
						<li><a href="#" title="Teste">Teste</a></li>
					</ul>
				</aside>

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