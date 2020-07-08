<div class="col-12">
	<div class="container">
		<h2 class="tcenter">Selecione um formulário para contato</h2>
		<p class="tcenter">Tem dúvidas ou necessita fazer orçamento para seu condomínio? Então escolha o formulário de sua preferência.</p>
		<div class="clearfix"></div>
		<div class="col-12">
			<div class="items">
				<div class="box budget center wrap" id="cliente">
					<div class="icon align center">
						<a href="javascript:;" title="Formulário de orçamento" class="__btn" data-budget="cliente"><h2><i class="far fa-handshake"></i></h2></a>
					</div>
					<div class="box__txt">
						<h3>Solicite seu orçamento</h3>
						<a href="javascript:;" title="Formulário de orçamento" class="__btn" data-budget="cliente"><p>Preencha um formulário específico para <strong>clientes</strong>.</p></a>
					</div>
				</div>
				<div class="box budget center wrap selected" id="colaborador">
					<div class="icon align center">
						<a href="javascript:;" title="Formulário para colaboradores" class="__btn" data-budget="colaborador"><h2><i class="far fa-user"></i></h2></a>
					</div>
					<div class="box__txt">
						<h3>Trabalhe conosco</h3>
						<a href="javascript:;" title="Formulário para candidatos" class="__btn" data-budget="colaborador"><p>Preencha um formulário específico para <strong>candidatos</strong>.</p></a>
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
			<div class="col-7 box__form" data-budget="colaborador">
				<div class="load" style="display: none;"><span></span></div>
				<?php
				//post
				include 'inc/mail/post.contact.php';
				//forms
				include 'inc/componentes/contato.inc.php'; 
				?>
			</div>
			<div class="col-5">
				<div class="contato">

					<div class="ad__box">
						<p>Aproveite!</p>
						<a href="javascript:;" class="__btn link" data-budget="cliente" title="Solicite seu orçamento"><h2>Solicite seu orçamento e ganhe 5% de desconto!</h2></a>
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
							<a href="mailto:<?=$contatoEmail?>" alt="<?=$contatoEmail?>"><i class="fas fa-envelope"></i> <?=$contatoEmail?></a>
						</span>
						<br>
						<span>
							<?php
							foreach ($fone as $key => $value):
								echo '
									<a href="tel:'.$value[0].$value[1].'"><span><i class="fas fa-'.$value[2].'-alt"></i> '.$value[0]. ' ' .$value[1].'</span></a>
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