<div class="clearfix"></div>
<br>
<div class="fleft" id="servicos">

	<h2 class="tcenter sublime">Serviços Prestados</h2>
	<!-- <h3 class="tcenter">Os melhores serviços para seu condomínio estão na <strong><?=$nomeSite?></strong></h3> -->
	<br>
	
<?php

include(VETOR . 'servico.vet.php'); //include vetor dos serviços
//color
$i=0;
foreach ($vetKey as $num => $vetor):
	$i++;

	if($i % 2):
		$color = 'c-gray'; 

	else:
		$color = 'c-blue'; 

	endif;
	//caminho das imagens
	$caminho = $url.'images/'.$vetor['cover'];

?>

	<div class="item">
		<div class="col-6 picture">
			<img src="<?=$caminho?>.jpg" alt="<?=$vetor['name']?> - <?=$nomeSite?>">
		</div>
		<div class="col-6 align <?=$color?>">
			<div class="container">
				<div class="col-10 col-md">	
					<div class="item__txt">
						<h2><?=$vetor['name']?></h2>
						<p><?=$vetor['content']?></p>
						<a class="__btn goto" data-budget="cliente" href="#contato" title="Contratar serviço de <?=$vetor['name']?>">
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