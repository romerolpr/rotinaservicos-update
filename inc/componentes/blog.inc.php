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
	</ul>
</nav>

<div class="related">
<div class="related_title">
	<h2>Veja também</h2>
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
		<div class="cover_related">
			<a href="<?=$url.$link->Path.'/'.$valor['url']?>" class="link">
				<img src="<?=$url.$path?>" alt="<?=$valor['name']?> - <?=$nomeSite?>" title="<?=$valor['name']?> - <?=$nomeSite?>">
			</a>
		</div>
		<div class="content_related">
			<a href="<?=$url.$link->Path.'/'.$valor['url']?>" class="link">
				<h2><?=$valor['name']?></h2>
				<p><?=$valor['published']?></p>
			</a>
		</div>
	</div>
<?php 
	
	else: 

	?>

		<div class="box_related">
			<div class="cover_related">
				<a href="<?=$url.$link->Path.'/'.$valor['url']?>" class="link">
					<img src="<?=$url.$path?>" alt="<?=$valor['name']?> - <?=$nomeSite?>" title="<?=$valor['name']?> - <?=$nomeSite?>">
				</a>
			</div>
			<div class="content_related">
				<a href="<?=$url.$link->Path.'/'.$valor['url']?>" class="link">
					<h2><?=$valor['name']?></h2>
					<p><?=$valor['published']?></p>
				</a>
			</div>
		</div>

<?php 
	
	endif;

endif;

if($key > 3) break;

endforeach; 

?>
</div>
</div>