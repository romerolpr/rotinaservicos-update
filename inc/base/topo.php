<div class="topo" id="headerscroll">
	<div class="navtop hide-mobile">
		<div class="container">
			<div class="fleft">
				<span><i class="fas fa-map-marker-alt"></i> <?=$contatoAddress.', Cep '.$contatoCep.', '.$UF;?></span>
			</div>
			<div class="fright">
				<?php
				foreach ($fone as $key => $value):
					echo '
						<a href="tel:'.$value[0].$value[1].'"><span><i class="fas fa-'.$value[2].'"></i> '.$value[0]. ' ' .$value[1].'</span></a>
					';
					if($key >= 2) break;
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
				<a href="<?=$url?>" alt="<?=$nomeSite?>">
					<img src="<?=$url?>images/logo.png" alt="Logo - <?=$nomeSite?>" title="Logo - <?=$nomeSite?>" width="50" class="fleft">
					<span><strong>/rotinaservicos</strong></span>
				</a>
			</div>
			<nav class="fright hide-mobile">
				<ul>
					<?php include 'inc/base/menu.inc.php'; ?>
				</ul>
			</nav>
			<div class="show-sm-mobile menu-mobile">
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