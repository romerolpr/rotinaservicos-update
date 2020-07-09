<a href="javascript:;" class="__btn link" data-budget="colaborador" title="Solicite seu orçamento"><h3 class="primary">Voltar</h3></a>
<h2>Solicite seu orçamento</h2>
<p>Preencha os dados abaixo para que possamos entrar em contato de forma mais objetiva.</p>

<div class="clearfix"></div>

<form class="form" method="post" enctype="multipart/form-data">
	<label for="nome_condominio">Nome Condomínio/ Empressa<span>*</span></label>
	<input type="text" name="nome_condominio" placeholder="Nome Condomínio/ Empressa" value="<?php if(isset($input['nome_condominio'])&&!empty($input['nome_condominio'])) echo $input['nome_condominio']?>" required>

	<label for="nome">Nome Completo<span>*</span></label>
	<input type="text" name="nome" placeholder="Nome Completo" value="<?php if(isset($input['nome'])&&!empty($input['nome'])) echo $input['nome']?>" required>

	<label for="telefone">Telefone <span>*</span></label>
	<input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($input['telefone'])&&!empty($input['telefone'])) echo $input['telefone']?>" required>

	<label for="telefone_2">Telefone 2 (opcional)</label>
	<input type="text" name="telefone_2" placeholder="Telefone" value="<?php if(isset($input['telefone_2'])&&!empty($input['telefone_2'])) echo $input['telefone_2']?>">

	<label for="email">E-mail<span>*</span></label>
	<input type="text" name="email" placeholder="E-mail" value="<?php if(isset($input['email'])&&!empty($input['email'])) echo $input['email']?>" required>

	<label for="endereco_condominio">Endereço Condomínio/ Empresa <span>*</span></label>
	<input type="text" name="endereco_condominio" placeholder="Endereço Condomínio/ Empresa" value="<?php if(isset($input['endereco_condominio'])&&!empty($input['endereco_condominio'])) echo $input['endereco_condominio']?>" required>

	<label for="area_total_condominio">Área Total Condomínio/ Empresa (m<sup>2</sup>) <span>*</span></label>
	<input type="text" name="area_total_condominio" placeholder="0.000" value="<?php if(isset($input['area_total_condominio'])&&!empty($input['area_total_condominio'])) echo $input['area_total_condominio']?>" required>

	<label for="quantidade_apartamentos">Quantidade Apartamentos/ Conjuntos <span>*</span></label>
	<input type="number" min="0" max="1000" step="1" name="quantidade_apartamentos" placeholder="0" value="<?php if(isset($input['quantidade_apartamentos'])&&!empty($input['quantidade_apartamentos'])) echo $input['quantidade_apartamentos']?>" required>

	<label for="valor_medio">Valor Médio Do Condomínio <span>*</span></label>
	<input type="text" name="valor_medio" placeholder="R$ 0.000,0" value="<?php if(isset($input['valor_medio'])&&!empty($input['valor_medio'])) echo $input['valor_medio']?>" required>

	<label for="mensagem">Mensagem <span>*</span></label>
	<textarea name="mensagem" placeholder="Mensagem..."><?php if(isset($input['mensagem'])&&!empty($input['mensagem'])) echo $input['mensagem']; ?></textarea>
	<div class="file">
		<span><i class="fas fa-paperclip"></i> Anexar um arquivo</span>
		<input class="item" type="file" name="anexo" id="anexo">
	</div>
	<br>
	<div class="g-recaptcha" style="transform:scale(0.8);-webkit-transform:scale(0.8);transform-origin:0 0;-webkit-transform-origin:0 0;float: left;" data-sitekey="<?= $Key; ?>" required></div>
	<br>
	<span class="fright">* Itens obrigatórios</span>
	<input type="submit" name="sendForm" value="Enviar">
</form>