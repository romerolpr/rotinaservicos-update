<a href="javascript:;" class="__btn link" data-budget="cliente" title="Solicitar orçamento"><h3 class="primary">Solicitar orçamento</h3></a>
<h2>Formulário para contato</h2>
<p>Envie seu contato e em breve entraremos em contato.</p>

<div class="clearfix"></div>

<form class="form" method="post" enctype="multipart/form-data">
	<label for="nome_colb">Nome <span>*</span></label>
	<input type="text" name="nome" placeholder="Nome Completo" value="<?php if(isset($input['nome'])&&!empty($input['nome'])) echo $input['nome']?>" id="nome_colb" required>
	<label for="email_colb">Email <span>*</span></label>
	<input type="text" name="email" placeholder="Email" value="<?php if(isset($input['email'])&&!empty($input['email'])) echo $input['email']?>" id="email_colb" required>

	<label for="telefone_colb">Telefone <span>*</span></label>
	<input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($input['telefone'])&&!empty($input['telefone'])) echo $input['telefone']?>" id="telefone_colb" required>

	<label>Motivo de contato <span>*</span></label>
	<select name="assunto" required>
		<option value="">-- Selecione --</option>
		<option value="Contato">Contato padrão</option>
		<option value="Curriculo">Envio de currículo</option>
		<option value="Outro">Outro</option>
	</select>

	<blockquote class="hide"></blockquote>

	<label for="mensagem_colb">Mensagem <span>*</span></label>
	<textarea name="mensagem" placeholder="Mensagem..." id="mensagem_colb" required><?php if(isset($input['mensagem'])&&!empty($input['mensagem'])) echo $input['mensagem']; ?></textarea>
	<div class="file">
		<span><i class="fas fa-paperclip"></i> Anexar um arquivo</span>
		<input class="item" type="file" name="anexo" id="anexo_colaborador">
	</div>
	<br>
	<div class="g-recaptcha" style="transform:scale(0.8);-webkit-transform:scale(0.8);transform-origin:0 0;-webkit-transform-origin:0 0;float: left;" data-sitekey="<?= $Key; ?>"></div>
	<br>
	<span class="fright">* Itens obrigatórios</span>
	<input type="submit" name="sendForm" value="Enviar">
</form>