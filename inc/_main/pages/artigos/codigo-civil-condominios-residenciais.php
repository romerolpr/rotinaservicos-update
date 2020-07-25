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

					<p>O tema hoje a ser abordado pelo Blog é referente à obrigatoriedade do seguro em condomínios, tendo seu texto presente de forma explícita tanto na Lei de Condomínios quanto no Novo Código Civil.</p>

					<p>Embora possa ser encarado como mais uma despesa obrigatória ao condomínio e, desta forma, também aos condôminos, é fundamental salientar a sua importância, visto que edificações estão constantemente sujeitas às mais variadas formas de sinistros, podendo, em casos extremos, gerar grande perda de patrimônio.</p>

					<p>Sua obrigatoriedade deu-se, inicialmente, na <a href="http://www.planalto.gov.br/ccivil_03/leis/l4591.htm" class="link" target="_blank" rel="nofollow">Lei 4.591 de 1964</a>, em seu Art. 13, “Proceder-se-á ao seguro da edificação ou do conjunto de edificações, neste caso, discriminadamente, abrangendo todas as unidades autônomas e partes comuns, contra incêndio ou outro sinistro que cause destruição no todo ou em parte, computando-se o prêmio nas despesas ordinárias do condomínio”, com sua redação estabelecendo sua abrangência e que a proteção deve ser contra qualquer sinistro, não apenas incêndio. E, neste mesmo artigo, em seu parágrafo único, determina-se o prazo para sua contratação e penalidade em caso de descumprimento. A saber: “O seguro de que trata este artigo será obrigatoriamente feito dentro de 120 dias, contados da data da concessão do “habite-se”, sob pena de ficar o condomínio sujeito à multa mensal equivalente a 1/12 do imposto predial, cobrável executivamente pela Municipalidade”.</p>

					<p>Já a Lei 10.406 de 2002, o Novo Código Civil, dá uma redação mais curta, porém, assim como na Lei de Condomínios, expressa da mesma forma a obrigatoriedade da contratação do seguro, em seu Art. 1.346, “É obrigatório o seguro de toda a edificação contra o risco de incêndio ou destruição, total ou parcial”.</p>

					<p>Com a evolução do segmento de seguros ao longo do tempo, atualmente existem diversos tipos de coberturas extras que podem ser contratadas paralelamente, como danos a veículos, a vidros, roubos, danos elétricos, entre outros. O síndico, legalmente responsável pela contratação, análise de coberturas e valores e sua posterior renovação, deve se atentar aos diferentes produtos oferecidos pelas seguradoras e avaliar com extremo critério todas essas questões, a fim de contratar aquele que ofereça o melhor custo-benefício, visto que a própria lei considera a contratação do seguro como uma despesa ordinária do condomínio.</p>

					<p>Portanto, além de cumprir com a legislação vigente, a contratação do seguro trará maior tranqüilidade ao seu condomínio, podendo ainda trazer benefícios extras para sinistros além dos presentes nos textos das leis citadas. Deste modo, síndico ou morador, nunca deixe de observar esta questão. Até o próximo post!</p>

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