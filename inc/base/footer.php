<?php if($URL[0] == 'home' && $popup): ?>
<div class="popup-box">
	<span class="close">&times;</span>
	<div class="content-popup">
		<div class="col-12 p-0 show-mobile">
			<div class="center">
				<img src="<?=$url?>images/logo.png" title="<=$nomeSite?>" alt="<=$nomeSite?>">
			</div>
		</div>
		<div class="col-8 p-0">
			<h2 class="tleft">CORRESPONDÊNCIAS: SEGURANÇA NO DESCARTE</h2>
		</div>	
		<div class="col-4 p-0 hide-mobile">
			<img class="fright" src="<?=$url?>images/logo.png" title="<=$nomeSite?>" alt="<=$nomeSite?>">
		</div>
		<div class="clearfix"></div>
		<br>
		<p class="tjustify">Aumentaram significativamente com o distanciamento social, o número de compras via internet efetuadas por consumidores residentes em condomínio.</p>
		<p class="tjustify">Como consequência, quase sempre ocorre o descartedas embalagens de maneira incorreta, indo muitas vezes informações pessoais de moradores pararem nas mãos de pessoas mal-intencionadas, colocando desta forma em risco, a sua segurança e a do próprio condomínio.</p>
		<p class="tjustify">Estas mesmas pessoas mal-intencionadas, se aproveitam ainda para clonar correspondências, contraindo empréstimos em nomes destes mesmos consumidores desavisados, entre outros crimes.</p>
		<p class="tjustify">Portanto, nossa sugestão é para que no descarte destas embalagens, o consumidor retire as etiquetas, as notas fiscais, entre outros, que contenham informações que possam ou poderiam ser utilizadas por criminosos de maneira fraudulenta.</p>
	</div>
	<div class="opacitybox"></div>
</div>
<?php endif; ?>

<?php
	
	//whatsapp
	if (isset($whatsapp) && !empty($whatsapp) && $whatsapp[2] != false):

		include(COMPONENTES . 'whatsapp-button.php');

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
						include(BASE . 'menu.inc.php');
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
				<p>© 2020 Romero Service Ltda. Todos os direitos reservados.<br><span class="txt-wattermarker">Desenvolvido por <a class="link" rel="nofollow" href="https://github.com/romerolpr" title="Lucas Romero" target="_blank">Lucas Romero</a></span></p>
			</div>
			<div class="col-6 hide-mobile">
				<div class="fright m-5-percent-align">
					<?php 
					$footer = true;
					include(COMPONENTES . 'canais.inc.php'); 
					?>
				</div>
			</div>
		</div>
	</div>	
</footer>