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
							<a href="tel:'.$value[0].$value[1].'" class="tel"><span><i class="fas fa-'.$value[2].'"></i> '.$value[0]. ' ' .$value[1].'</span></a><br>
						';
						if($key >= 2) break;
					endforeach;
					?>
				</p>
				<p>
					<a class="mail" href="mailto:<?=$contatoEmail?>" alt="<?=$contatoEmail?>"><i class="fas fa-envelope"></i> <?=$contatoEmail?></a>
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
						<li><a href="<?=$canais[2][0]?>post/151765904557/obras-em-condominios" rel="nofollow" target="_blank" title="Obras em condomínios">Obras em condomínios</a></li>
						<li><a href="<?=$canais[2][0]?>post/150122406197/seguro-condominial" rel="nofollow" target="_blank" title="Seguro condominal">Seguro condominal</a></li>
						<li><a href="<?=$canais[2][0]?>post/149326863687/fracoes-ideais-condominios" rel="nofollow" target="_blank" title="Frações ideais em condomínios">Frações ideais em condomínios</a></li>
						<li><a href="<?=$canais[2][0]?>post/148810893322/o-que-e-area-comum-area-privativa" rel="nofollow" target="_blank" title="O que é área comum e área privativa?">O que é área comum e área privativa?</a></li>
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
				<p>© 2020 Romero Service LTDA. Todos os direitos reservados.</p>
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