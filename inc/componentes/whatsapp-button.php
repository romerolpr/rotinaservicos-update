<div class="icon-whatsapp">
	<div class="box-whatsapp effect Up">
		<div class="topo-box-whatsapp">
			<h3 class="fleft" id="txtwtt">Enviar mensagem via WhatsApp</h3>
		</div>
		<div class="clearfix"></div>
		<div id="formwtt">
			<form class="form form-whatsapp" method="post" enctype="multipart/form-data" id="formtoWhatsapp">
				<br>
				<label for="whatsapp-name">Seu nome: </label>
				<input type="text" name="whatsapp_name" placeholder="Seu nome" id="whatsapp-name" required>
				<label>Motivo de contato</label>
				<select name="whatsapp_assunto" required>
					<option value="">-- Selecione --</option>
					<option value="orcamento">Solicitar orçamento</option>
					<option value="vagas">Vagas disponíveis</option>
				</select>
				<input type="submit" name="sendForm" value="Enviar mensagem por Whatsapp">
			</form>
		</div>
		<span class="close-box-whatsapp" title="Fechar janela"><small>Fechar janela</small></span>
	</div>
	<button onclick="Chat()" title="Iniciar conversa no Whatsapp" class="button fright" id="OpenChat"><img src="<?=$url?>images/icon-whatsapp.png" title="Iniciar conversa no Whatsapp" alt="Iniciar conversa no Whatsapp" id="imageWhatsapp"></button>
</div>