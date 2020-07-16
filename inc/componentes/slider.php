<div class="slider">
	<div class="img">
		<div class="load"><span></span></div>
		<div class="txtslider">
			<div class="container">
				<div class="center__slider">
					<div class="col-12 effect Left">
						<?php

						if(!empty($urlPagina)):

						?>
						
						<div class="title">
							<?php include('inc/componentes/breadcrumb.php'); ?>
							<h1><?=$title?></h1>
							<h3>por <?=$autor?> </h3>
						</div>

						<?php
						else:
						?>	

						<div class="title">
							<h1>
								<?php
								if(!empty($urlPagina)):
									echo $title;
								else:
									echo $nomeSite;
								endif;
								?>	
							</h1>
							<h3><?=$sloganSite?></h3>
						</div>
						<a href="#contato" title="Solicitar orçamento com 5% de desconto" class="link goto opacity1">
						<span class="btn __btn" data-budget="cliente">Solicitar orçamento com 5% de desconto</span>
						</a>

						<?php
						endif;
						?>	
					</div>
				</div>
			</div>
		</div>
		<div class="moldura">
			<div class="filter"></div>
			<div class="img"></div>
		</div>
	</div>
</div>