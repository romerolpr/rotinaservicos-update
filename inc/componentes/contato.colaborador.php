<a href="javascript:;" class="__btn link" data-budget="cliente" title="Solicite seu orçamento"><h3 class="primary">Solicite seu orçamento</h3></a>

<h2>Formulário para contato</h2>
<p>Envie seu contato e em breve entraremos em contato.</p>

<div class="clearfix"></div>

<form class="form" method="post">
	<label for="nome">Nome <span>*</span></label>
	<input type="text" name="nome" placeholder="Nome Completo" value="<?php if(isset($_POST['nome'])&&!empty($_POST['nome'])) echo $_POST['nome']?>" required>
	<label for="email">Email <span>*</span></label>
	<input type="text" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])&&!empty($_POST['email'])) echo $_POST['email']?>" required>

	<label for="telefone">Telefone <span>*</span></label>
	<input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($_POST['telefone'])&&!empty($_POST['telefone'])) echo $_POST['telefone']?>" required>

	<label for="assunto">Motivo de contato <span>*</span></label>
	<select name="assunto" required>
		<option value="">-- Selecione --</option>
		<option value="Envio de currículo">Envio de currículo</option>
		<option value="Solicite seu orçamento">Solicite seu orçamento</option>
		<option value="Outro">Outro</option>
	</select>

	<label for="mensagem">Mensagem <span>*</span></label>
	<textarea name="mensagem" placeholder="Mensagem..." required></textarea>
	<div class="g-recaptcha" style="transform:scale(0.8);-webkit-transform:scale(0.8);transform-origin:0 0;-webkit-transform-origin:0 0;float: left;" data-sitekey="<?= $Key; ?>"></div>
	<br>
	<span class="fright">* Itens obrigatórios</span>
	<button type="submit" name="EnviaContato">Enviar</button>
</form>