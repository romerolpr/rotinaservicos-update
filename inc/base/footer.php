<?php
	
	//whatsapp
	if (isset($whatsapp) && !empty($whatsapp) && $whatsapp[2] != false):

		include('inc/componentes/whatsapp-button.php');

	endif;

?>

<footer class="effect fadeIn">
	<div class="col-12 p-40">
		<div class="container">
			<div class="col-6">
				<p>Contato</p>
				<p>
					<?php
					foreach ($fone as $key => $value):
						echo '
							<a href="tel:'.$value[0].$value[1].'" class="tel" title="'.$value[0].$value[1].'"><span><i class="fas fa-'.$value[2].'"></i> '.$value[0]. ' ' .$value[1].'</span></a><br>
						';
						if($key >= 2) break;
					endforeach;
					?>
				</p>
				<p>
					<a class="mail" href="mailto:<?=$contatoEmail?>" title="<?=$contatoEmail?>"><i class="fas fa-envelope"></i> <?=$contatoEmail?></a>
				</p>
				<p>
					<i class="fas fa-map-marker-alt"></i> <?=$contatoAddress.', '.$bairro?>, <?= ' Cep '.$contatoCep.', '.$cidade.' - '.$UF; ?>
				</p>
			</div>
			<div class="col-3">
				<p>Navegue pelo site</p>
				<nav class="menu__footer">
					<ul>
						<?php
						$footer 	= true;
						$submenu 	= false;
						include 'inc/base/menu.inc.php';
						?>
					</ul>
				</nav>
			</div>
			<div class="col-3">
				<p>Últimos artigos</p>
				<nav class="menu__footer">
					<ul>
						<?php
						foreach ($vetBlog as $key => $value): 
						?>
						<li><a href="<?=$url?>artigos/<?=$value['url']?>" title="<?=$value['name']?>"><?=$value['name']?></a></li>
						<?php if ($key > 4) break; endforeach; ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-12 p-0">
		<div class="arrow"></div>
		<div class="arrow"></div>
		<div class="container">
			<div class="col-6">
				<p>© 2020 Romero Service Ltda. Todos os direitos reservados.</p>
			</div>
			<div class="col-6 hide-mobile">
				<div class="fright">
					<?php 
					$footer = true;
					include 'inc/componentes/canais.inc.php'; 
					?>
				</div>
			</div>
		</div>
	</div>	
</footer>