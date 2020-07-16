<div class="aviso-popup">
	<div class="container">
		<div class="content_popup">
			<p class="fleft">Nós usamos cookies para garantir que você tenha a melhor experiência em nosso site.</p>
			<div class="md-center">
				<a href="<?=$url?>#" class="__close" data-close=".aviso-popup"><span class="btn fright">Entendido!</span></a>
			</div>
		</div>
	</div>
</div>
<div class="topo" id="headerscroll">
	<div class="navtop hide-mobile">
		<div class="container">
			<div class="fleft">
				<span><i class="fas fa-map-marker-alt"></i> <?=$contatoAddress.', '. $bairro .', Cep '.$contatoCep.', '.$UF;?></span>
			</div>
			<div class="fright">
				<?php
				foreach ($fone as $key => $value):
					if($key > 0):
					echo '
						<a href="tel:'.$value[0].$value[1].'" title="'.$value[0].$value[1].'"><span><i class="fas fa-'.$value[2].'"></i> '.$value[0]. ' ' .$value[1].'</span></a>
					';
					if($key >= 2) break;
					endif;
				endforeach;
				?>
				<div class="fleft">
					<?php include 'inc/componentes/canais.inc.php'; ?>
				</div>
			</div>
		</div>
	</div>
	<header id="menu">
		<div class="container">	
			<div class="logo fleft">
				<a href="<?=$url?>" title="<?=$nomeSite?>">
					<img src="<?=$url?>images/logo.png" alt="Logo - <?=$nomeSite?>" title="Logo - <?=$nomeSite?>" width="50" class="fleft">

					<a href="tel:<?=$fone[0][0].$fone[0][1]?>" title="Clique para ligar"><span class="fone-logo">(<?=$fone[0][0]. ') ' .$fone[0][1]?></span></a>
				</a>
			</div>
			<nav class="fright hide-mobile">
				<ul>
					<?php include 'inc/base/menu.inc.php'; ?>
				</ul>
				<?php if(!$footer): ?>
				<a href="#contato" data-budget="cliente" class="__btn goto fright" title="Solicite seu orçamento e ganhe 5% de desconto!"><span class="btn-topo">Solicite seu orçamento!</span></a>
				<?php endif; ?>
			</nav>
			<div class="show-mobile menu-mobile">
				<button class="s-mobile"><i class="fa fa-bars"></i></button>
				<div class="nav-mobile showUpMenu">
					<ul>
						<?php 
						$footer = true;
						include 'inc/base/menu.inc.php'; 
						?>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div id="mblock"></div>
</div>