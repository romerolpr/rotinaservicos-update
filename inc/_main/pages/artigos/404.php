<?php 
$title	= '404: Artigo não encontrado';
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
				
				<article class="article-full">

					<?php include(COMPONENTES . 'breadcrumb.php'); ?>

					<?php  

					foreach ($vetBlog as $key => $valor):

						//busca
						$search 		= ucfirst(str_replace('-', ' ', $link->Link));

						//faz a combinacao
						if(preg_match('/' . strtolower($URL[1]) . '/', strtolower($valor['url']))):

							$sugestao = array($valor['url'], $valor['name']); 
							break;

						else:

							$sugestao = false;

						endif;

					endforeach;
					
					?>

					

					<?php if($sugestao): ?>
						<h2>Artigos semelhantes</h2>
						<br>
						<p>Pode ser que você esteja procurando por: <a href="<?=$url.'artigos/'.$sugestao[0]?>" class="link"><?=$sugestao[1]?></a></p>

					<?php else: ?>
						<h2>Oops!</h2>
						<p>Nada encontrado por <strong><?= !$search ? $URL[1] : $search; ?></strong>, talvez o artigo não existe no site, ou não está mais disponível para leitura.</p>
					<?php endif; ?>

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


							if($sugestao):

								$i = 0;

								if($valor['url'] == $sugestao[0]):

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
										</div>
									</a>
								</div>
						<?php  	

								endif; 
							else: 

								$i++;

								if($i <= 3 && $key <= rand(1, count($vetBlog))): ?>

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
										</div>
									</a>
								</div>

						<?php endif;

						endif; 
						
						endforeach; ?>

						<p class="tcenter fright">
							<a href="<?=$url?>artigos" title="Ver todos os artigos"><span class="btn">Ver todos os artigos</span></a>
						</p>

					</div>			


					<br class="clearfix">


				</article>

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