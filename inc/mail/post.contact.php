<?php

//quebra o file, caso tenha

//resgata todos os inputs em uma array
$input = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($input['sendForm']) && !empty($input['sendForm'])): 
	
	//inclui o message
	?>

	<script>
	<?php 
	//inclui o javascript pro message
	include('inc/mail/js/message-alert.js'); 
	?>
	</script>

	<?php

	//quebra sessao do input submit e recaptcha
	unset($input['sendForm'], $input['g-recaptcha-response'], $input['anexo']);

	//recupera a extencao do file
	$ext = pathinfo($_FILES['anexo']['name'], PATHINFO_EXTENSION);

	//lista de extencoes permitidas
	$allowed = array(
		'xls','xlsx','xlm','xla',
		'xlt','xltx','xlsm','docx',
		'doc','pdf','png', 'xml',
		'jpg','jpeg','csv'
	);


	//verifica se existe input vazio, nao preenchido
	if(in_array('', $input) && $input['telefone_2']):

		//cria mensagem
		$message = array(
			'title' 	=> 'Campos vazios!',
			'desc' 		=> 'Por favor, preencha os campos vazios corretamente.', 
			'response' 	=> 'warning'
		);

	//verifica tamanho do arquivo
	elseif(isset($_FILES['anexo']) && !$_FILES['anexo']['error'] == 4 && $_FILES['anexo']['size'] > 1024 * 1024):

		//cria mensagem
		$message = array(
			'title' 	=> 'Tamanho excedido!',
			'desc' 		=> 'O arquivo selecionado excedeu o limite de 1 MB.', 
			'response' 	=> 'warning'
		);

	//verifica tipo de arquivo
	elseif(isset($_FILES['anexo']) &&  !$_FILES['anexo']['error'] == 4 && !in_array($ext, $allowed)):

		//cria mensagem
		$message = array(
			'title' 	=> 'Formato não permitido!',
			'desc' 		=> 'Parece que você tentou enviar um arquivo incompatível. Tente enviar PDF, arquivos DOC, Excel ou imagens.', 
			'response' 	=> 'warning'
		);


	//tudo certo
	else:

		//caso tenha um assunto específico
		if(isset($input['assunto_personalizado']) && !empty($input['assunto_personalizado'])):
			//quebra sessao
			unset($input['assunto']);

			//remove caracteres especiais
			$rewriteAssunto = $input['assunto_personalizado'];
			$rewriteAssunto = str_replace(" "," ",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($rewriteAssunto))));

			//recria a variavel
			$input['assunto'] = $rewriteAssunto;
		else:
			unset($input['assunto_personalizado']);
		endif;

		$input['anexo'] = $_FILES['anexo'];
		$input['g-recaptcha-response'] = $_POST['g-recaptcha-response'];

		//realiza o envio
		include('send.contact.php');

	endif;

	// Controle de mensagens
	if($message):
	  echo '
	  <script>
	    $(function (){
	      x++;
	      if(x != 0 && x < 2){
	      messageAlert(
	        "'.$message["title"].'",
	        "'.$message["desc"].'",
	        "'.$message["response"].'"
	        );
	      }
	    });
	  </script>
	  ';
	else:
	  //Cria menssagem de erro caso não consiga enviar
	  echo '
	  <script>
	    $(function (){
	      messageAlert(
	        "Falhou!",
	        "Infelizmente não conseguimos processar seu contato. Entre em contato diretamente em <a href="mailto:'.$emailContato.'" rel="nofollow" title="'.$emailContato.'">'.$emailContato.'</a>.",
	        "error"
	        );
	    })
	  </script>
	  ';
	endif;


endif;

?>