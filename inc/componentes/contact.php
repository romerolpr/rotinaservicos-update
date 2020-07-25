<div class="col-12">
	<div class="container">
		<h2 class="tcenter">Selecione um formulário para contato</h2>
		<p class="tcenter">Necessita fazer orçamento para seu condomínio ou empresa? Então escolha o formulário de sua preferência.</p>
		<div class="clearfix"></div>
		<div class="col-12">
			<div class="items">
				<div class="box budget center wrap selected" id="cliente">
					<div class="icon align center">
						<a href="#contato" title="Formulário de orçamento" class="goto __btn" data-budget="cliente"><span class="m-h2"><i class="far fa-handshake"></i></span></a>
					</div>
					<div class="box__txt">
						<h3>Solicite seu orçamento</h3>
						<a href="#contato" title="Formulário de orçamento" class="goto __btn" data-budget="cliente"><p>Preencha um formulário específico para <strong>clientes</strong>.</p></a>
					</div>
				</div>
				<div class="box budget center wrap" id="colaborador">
					<div class="icon align center">
						<a href="#contato" title="Formulário para colaboradores" class="goto __btn" data-budget="colaborador"><span class="m-h2"><i class="far fa-user"></i></span></a>
					</div>
					<div class="box__txt">
						<h3>Trabalhe conosco</h3>
						<a href="#contato" title="Formulário para candidatos" class="goto __btn" data-budget="colaborador"><p>Preencha um formulário específico para <strong>candidatos</strong>.</p></a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="col-12 c-gray fleft" id="contato">
	<div class="container">
		<div class="col-12 p-0">
			<div class="p-0 col-12 show-sm-mobile">
				<div class="ad__box">
					<p>Aproveite!</p>
					<a href="#contato" class="__btn link goto" data-budget="cliente" title="Solicite seu orçamento"><h2>Solicite seu orçamento e ganhe 5% de desconto!</h2></a>
				</div>
			</div>	
			<div class="col-7 box__form pt-0" data-budget="colaborador">
				<div class="load" style="display: none;"><span></span></div>
				<?php
				//post
				include(MAIL . 'post.contact.php');
				//forms
				include(COMPONENTES . 'contato.inc.php'); 
				?>
			</div>
			<div class="col-5 pt-0">
				<div class="contato">

					<div class="ad__box hide-sm-mobile">
						<p>Aproveite!</p>
						<a href="#contato" class="__btn link goto" data-budget="cliente" title="Solicite seu orçamento"><h2>Solicite seu orçamento e ganhe 5% de desconto!</h2></a>
					</div>

					<span class="tag">#fiqueemcasa</span>

					<p>
						<span>
							<i class="fas fa-map-marker-alt"></i> <?=$contatoAddress.', '.$bairro?>
							<br>
							<?= 'Cep '.$contatoCep.', '.$cidade.' - '.$UF; ?>
						</span>
						<br>
						<span>
							<a href="mailto:<?=$contatoEmail?>" title="<?=$contatoEmail?>"><i class="fas fa-envelope"></i> <?=$contatoEmail?></a>
						</span>
						<br>
						<span>
							<?php
							foreach ($fone as $key => $value):
								echo '
									<a href="tel:'.$value[0].$value[1].'" title="'.$value[0].$value[1].'"><span><i class="fas fa-'.$value[2].'"></i> '.$value[0]. ' ' .$value[1].'</span></a><br>
								';
								if($key >= 2) break;
							endforeach;
							?>
						</span>
					</p>
					<div class="clearfix"></div>
					<div class="location" id="iframe__map">
						<!-- Map -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>