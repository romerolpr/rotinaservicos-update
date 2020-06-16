<a href="javascript:;" class="__btn link" data-budget="colaborador" title="Solicite seu orçamento"><h3 class="primary">Envie seu currículo</h3></a>
<h2>Solicite seu orçamento</h2>
<p>Preencha os dados abaixo para que possamos entrar em contato de forma mais objetiva.</p>

<div class="clearfix"></div>

<form class="form" method="post">
	<label for="nome_condominio">Nome Condomínio/ Empressa<span>*</span></label>
	<input type="text" name="nome_condominio" placeholder="Nome Condomínio/ Empressa" value="<?php if(isset($_POST['nome_condominio'])&&!empty($_POST['nome_condominio'])) echo $_POST['nome_condominio']?>" required>

	<label for="nome">Nome Completo<span>*</span></label>
	<input type="text" name="nome" placeholder="Nome Completo" value="<?php if(isset($_POST['nome'])&&!empty($_POST['nome'])) echo $_POST['nome']?>" required>

	<label for="telefone">Telefone <span>*</span></label>
	<input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($_POST['telefone'])&&!empty($_POST['telefone'])) echo $_POST['telefone']?>" required>

	<label for="telefone_2">Telefone 2 (opcional)</label>
	<input type="text" name="telefone_2" placeholder="Telefone" value="<?php if(isset($_POST['telefone_2'])&&!empty($_POST['telefone_2'])) echo $_POST['telefone_2']?>">

	<label for="email">E-mail<span>*</span></label>
	<input type="text" name="email" placeholder="E-mail" value="<?php if(isset($_POST['email'])&&!empty($_POST['email'])) echo $_POST['email']?>" required>

	<label for="endereco_condominio">Endereço Condomínio/ Empresa <span>*</span></label>
	<input type="text" name="endereco_condominio" placeholder="Endereço Condomínio/ Empresa" value="<?php if(isset($_POST['endereco_condominio'])&&!empty($_POST['endereco_condominio'])) echo $_POST['endereco_condominio']?>" required>

	<label for="area_total_condominio">Área Total Condomínio/ Empresa (m<sup>2</sup>) <span>*</span></label>
	<input type="text" name="area_total_condominio" placeholder="0.000" value="<?php if(isset($_POST['area_total_condominio'])&&!empty($_POST['area_total_condominio'])) echo $_POST['area_total_condominio']?>" required>

	<label for="quantidade_apartamentos">Quantidade Apartamentos/ Conjuntos <span>*</span></label>
	<input type="number" min="0" max="1000" step="2" name="quantidade_apartamentos" placeholder="00" value="<?php if(isset($_POST['quantidade_apartamentos'])&&!empty($_POST['quantidade_apartamentos'])) echo $_POST['quantidade_apartamentos']?>" required>

	<label for="valor_medio">Valor Médio Do Condomínio <span>*</span></label>
	<input type="text" name="valor_medio" placeholder="R$ 0.000,0" value="<?php if(isset($_POST['valor_medio'])&&!empty($_POST['valor_medio'])) echo $_POST['valor_medio']?>" required>

	<label for="mensagem">Mensagem <span>*</span></label>
	<textarea name="mensagem" placeholder="Mensagem..."></textarea>
	<div class="g-recaptcha" style="transform:scale(0.8);-webkit-transform:scale(0.8);transform-origin:0 0;-webkit-transform-origin:0 0;float: left;" data-sitekey="<?= $Key; ?>" required></div>
	<br>
	<span class="fright">* Itens obrigatórios</span>
	<button type="submit" name="EnviaContato">Enviar</button>
</form>