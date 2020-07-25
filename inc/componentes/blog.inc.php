<div class="related">
<div class="related_title">
	<h3>Artigos relacionados</h3>
</div>
<div class="related_load">
<?php
//resgata a url e monta em array
$current = explode('-', $link->Link);
//conta
$count = count($vetBlog);
//random
$rand = mt_rand(0, $count-1);
foreach ($vetBlog as $key => $valor):

//definindo caminhos das pastas
$path = 'images/artigos/' . $valor['cover'];
//condicao para nao exibir o atual
if ($link->Link != $valor['url']):

	//faz o corte para comparar
	$check = explode('-', $valor['url']);

	foreach ($current as $indice => $value):
		$temp = $value;
	endforeach; 

	if(in_array($temp, $check)):


?>
	<div class="box_related">
		<a href="<?=$url.$link->Path.'/'.$valor['url']?>" class="link">
			<div class="cover_related">
				<img src="<?=$url.$path?>" alt="<?=$valor['name']?> - <?=$nomeSite?>" title="<?=$valor['name']?> - <?=$nomeSite?>">
			</div>
			<div class="content_related">
				<h2><?=$valor['name']?></h2>
				<span><?=$valor['published']?></span>
				<p><?=$valor['description']?></p>
			</div>
		</a>
	</div>
<?php 
	
	else: 

	?>

		<div class="box_related">
			<a href="<?=$url.$link->Path.'/'.$valor['url']?>" class="link">
				<div class="cover_related">
					<img src="<?=$url.$path?>" alt="<?=$valor['name']?> - <?=$nomeSite?>" title="<?=$valor['name']?> - <?=$nomeSite?>">
				</div>
				<div class="content_related">
					<h2><?=$valor['name']?></h2>
					<span><?=$valor['published']?></span>
					<p><?=$valor['description']?></p>
				</div>
			</a>
		</div>

<?php 
	
	endif;

endif;

if($key > 3) break;

endforeach; 

?>
</div>
</div>

<?php if(!$related): ?>
	<nav class="nav-aside">
		<a href="<?=$url?>artigos" title="Artigos">
			<h3>Artigos</h3>
		</a>
		<ul class="nav-aside">
			<?php 
			foreach ($vetBlog as $key => $value): 
			if($link->Link != $value['url']):
			?>
			<li><a href="<?=$url?>artigos/<?=$value['url']?>" title="<?=$value['name']?>"><?=$value['name']?></a></li>
			<?php 
			else: ?>
			<li class="active"><a href="<?=$url?>artigos/<?=$value['url']?>" title="<?=$value['name']?>"><?=$value['name']?></a></li>
			<?php 
			endif;
			endforeach;
			?>
			<li class="show-all"><a href="<?=$url?>artigos" title="Ver todos">Ver todos</a></li>
		</ul>
	</nav>
<?php endif; ?>