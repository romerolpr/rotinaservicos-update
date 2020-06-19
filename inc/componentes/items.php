<div class="clearfix"></div>
<div class="fleft" id="servicos">

	<h2 class="tcenter">Serviços Prestados</h2>
	<br>
	
<?php

include('inc/componentes/vetor/vetKey.php'); //include vetor dos serviços
//color
$i=0;
foreach ($vetKey as $num => $vetor):
	$i++;
	($i % 2) ? $color = 'white' : $color = 'gray';

?>

	<div class="item">
		<div class="col-6 picture hide-mobile">
			<img src="<?=$url?>img/<?=$vetor['cover']?>.jpg" alt="<?=$vetor['name']?> - <?=$nomeSite?>">
		</div>
		<div class="col-6 align <?=$color?>">
			<div class="container">
				<div class="col-10 col-md">	
					<div class="item__txt">
						<h2><?=$vetor['name']?></h2>
						<p><?=$vetor['content']?></p>
						<a class="__btn" data-budget="cliente" href="<?=$url?>?service=<?=$vetor['cover']?>#contato" title="Contratar serviço de <?=$vetor['name']?>">
							<span class="btn btn-item">Contratar serviço</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 

endforeach; 

?>

</div>