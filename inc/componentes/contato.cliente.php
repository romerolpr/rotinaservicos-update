<a href="javascript:;" class="__btn link" data-budget="colaborador" title="Solicite seu orçamento"><h3 class="primary">Voltar</h3></a>
<h2>Solicite seu orçamento</h2>
<p>Preencha os dados abaixo para que possamos entrar em contato de forma mais objetiva.</p>

<div class="clearfix"></div>

<form class="form" method="post" enctype="multipart/form-data">
	<label for="nome_condominio_cliente">Nome Condomínio/ Empressa<span>*</span></label>
	<input type="text" name="nome_condominio" placeholder="Nome Condomínio/ Empressa" value="<?php if(isset($input['nome_condominio'])&&!empty($input['nome_condominio'])) echo $input['nome_condominio']?>" id="nome_condominio_cliente" required>

	<label for="nome_cliente">Nome Completo<span>*</span></label>
	<input type="text" name="nome" placeholder="Nome Completo" value="<?php if(isset($input['nome'])&&!empty($input['nome'])) echo $input['nome']?>" id="nome_cliente" required>

	<label for="telefone_cliente">Telefone <span>*</span></label>
	<input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($input['telefone'])&&!empty($input['telefone'])) echo $input['telefone']?>" id="telefone_cliente" required>

	<label for="telefone_2_cliente">Telefone 2 (opcional)</label>
	<input type="text" name="telefone_2" placeholder="Telefone" value="<?php if(isset($input['telefone_2'])&&!empty($input['telefone_2'])) echo $input['telefone_2']?>" id="telefone_2_cliente">

	<label for="email_cliente">E-mail<span>*</span></label>
	<input type="text" name="email" placeholder="E-mail" value="<?php if(isset($input['email'])&&!empty($input['email'])) echo $input['email']?>" id="email_cliente" required>

	<label for="endereco_condominio_cliente">Endereço Condomínio/ Empresa <span>*</span></label>
	<input type="text" name="endereco_condominio" placeholder="Endereço Condomínio/ Empresa" value="<?php if(isset($input['endereco_condominio'])&&!empty($input['endereco_condominio'])) echo $input['endereco_condominio']?>" id="endereco_condominio_cliente" required>

	<label for="area_total_condominio_cliente">Área Total Condomínio/ Empresa (m<sup>2</sup>) <span>*</span></label>
	<input type="text" name="area_total_condominio" placeholder="0.000" value="<?php if(isset($input['area_total_condominio'])&&!empty($input['area_total_condominio'])) echo $input['area_total_condominio']?>" id="area_total_condominio_cliente" required>

	<label for="quantidade_apartamentos_cliente">Quantidade Apartamentos/ Conjuntos <span>*</span></label>
	<input type="number" min="0" max="1000" step="1" name="quantidade_apartamentos" placeholder="0" value="<?php if(isset($input['quantidade_apartamentos'])&&!empty($input['quantidade_apartamentos'])) echo $input['quantidade_apartamentos']?>" id="quantidade_apartamentos_cliente" required>

	<label for="valor_medio_cliente">Valor Médio Do Condomínio <span>*</span></label>
	<input type="text" name="valor_medio" placeholder="R$ 0.000,0" value="<?php if(isset($input['valor_medio'])&&!empty($input['valor_medio'])) echo $input['valor_medio']?>" id="valor_medio_cliente" required>

	<label for="mensagem_cliente">Mensagem <span>*</span></label>
	<textarea name="mensagem" placeholder="Mensagem..." id="mensagem_cliente" required><?php if(isset($input['mensagem'])&&!empty($input['mensagem'])) echo $input['mensagem']; ?></textarea>
	<div class="file">
		<span><i class="fas fa-paperclip"></i> Anexar um arquivo</span>
		<input class="item" type="file" name="anexo" id="anexo_cliente">
	</div>
	<br>
	<div class="g-recaptcha" style="transform:scale(0.8);-webkit-transform:scale(0.8);transform-origin:0 0;-webkit-transform-origin:0 0;float: left;" data-sitekey="<?= $Key; ?>"></div>
	<br>
	<span class="fright">* Itens obrigatórios</span>
	<input type="submit" name="sendForm" value="Enviar">
</form>