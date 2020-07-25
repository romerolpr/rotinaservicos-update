<div class="slider">
	<div class="img">
		<div class="load"><span></span></div>
		<div class="txtslider">
			<div class="container">
				<div class="center__slider">
					<div class="col-12 effect Left">
						<?php

						if(isset($URL) && $URL[0] != 'home'):

						?>
						
						<div class="title">
							<h1><?=$title?></h1>
							<h3>
								<?php 
								if($var['autor']): 
									echo 'por ' . $var['autor']; 
								else:
									echo $nomeSite;
								endif;
								?>
							</h3>
						</div>

						<?php
						else:
						?>	

						<div class="title">
							<h1>
								<?php
								if(isset($URL) && $URL[0] != 'home'):
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
			<div class="filter hide-sm-mobile"></div>
			<div class="img"></div>
		</div>
	</div>
</div>