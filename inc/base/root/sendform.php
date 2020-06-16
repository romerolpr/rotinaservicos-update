<?php  

// if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
if (true) {

    $captcha_data = $_POST['g-recaptcha-response'];


	// Se nenhum valor foi recebido, o usuário não realizou o captcha
	// if ($captcha_data) {
	if (!$captcha_data) {

		include 'geral.php';
		$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);

		// if ($resposta.success) {
		if (true) {

			// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
			include "PHPMailer/PHPMailer-master/PHPMailerAutoload.php"; 

			date_default_timezone_set('America/Sao_Paulo');
			
			$mail = new PHPMailer(); 
			$mail->IsSMTP(); 
			
			// if ($_SERVER["HTTP_HOST"]=="localhost" || $_SERVER["HTTP_HOST"]=="localhost.com"):
				// ACESSA SERVIDOR DO GOOGLE
				$mail->Host = "smtp.gmail.com"; 
			// else:
			// 	// ACESSA SERVIDOR REAL
				// $mail->Host = "smtp.hostinger.com.br";
				// EMAIL CÓPIA
				$mail->AddAddress('rotina.servicos@gmail.com');
			// endif;

			$mail->Port = 587; 

			// Usar autenticação SMTP (obrigatório) 
			$mail->SMTPAuth = true; 
			// Usuário do servidor SMTP (endereço de email) 
			$mail->Username = $emailEnvia; 
			$mail->Password = $emailPass; 
			// Configurações de compatibilidade para autenticação em TLS 
			$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

			$mail->SMTPDebug = 2; 

			// Define o remetente 
			$mail->From = $contatoEmail; 
			$mail->FromName = $nomeSite; 

			//variavies
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['msg'];
			$Email_remetente = $emailEnvia;

			//definindo data atual
			$day=date('j');
			$month=date('F');
			$year=date('Y');
			$horario=date('g:i a');
			//montando horario
			$data=$day.' de '.$month.' de '.$year.', '.$horario;
			$data_hoje=$data;
			
			// Define o(s) destinatário(s) 
			$mail->AddAddress($email, $nome); 
			
			// Opcionais: CC e BCC
			// $mail->AddCC('joana@provedor.com', 'Joana'); 
			// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
			
			// Definir se o e-mail é em formato HTML ou texto plano 
			// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
			$mail->IsHTML(true); 
			
			// Charset (opcional) 
			$mail->CharSet = 'UTF-8'; 
			
			// Assunto da mensagem 
			$mail->Subject = "CONTATO (" . $assunto . ") - ROTINA SERVICOS TERCEIRIZADOS"; 
			
			// Corpo do email 
			$mail->Body = '

			<style>
				body, td, div, p, a, input {
					font-family: arial, sans-serif;
				}
			</style>
			<div class="bodycontainer">
				<div class="maincontainer">
					<table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td><font size="+1"><b>ROTINA SERVIÇOS: Formulário de contato</b></font><br></td></tr></tbody></table>
					<hr>
					<tbody>
					<tr><td><font size="-1"><b>ROTINA SERVIÇOS </b>&lt;rotina.servicos@gmail.com&gt;</font></td><td align="right"><font size="-1">'.$data_hoje.'</font></td></tr>
					<tr><td colspan="2" style="padding-bottom: 4px;"><font size="-1" class="recipient"><div class="replyto">Responder a: '.$nome.' &lt;'.$email.'&gt;</div><div>Para: '.$nome.' &lt;'.$email.'&gt;</div></font></td></tr>
					<hr>
					</tbody>
					<div style="overflow: hidden;"><font size="-1"><table style="border-collapse:collapse;border-spacing:0;border-color:#761919">
					<tbody><tr>
					<th style="font-family:Arial,sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;vertical-align:top;text-align:center" colspan="2">
					<a href="https://www.rotinaservicos.com/" width="150" title="rotinaservicos" alt="rotinaservicos">
						<img src="https://static.wixstatic.com/media/a127fb_44ac34601ebc4ec781943876ab9e9894~mv2.jpg/v1/fill/w_440,h_413,al_c,lg_1,q_80/LOGO%20ATUAL.webp" width="150" title="rotinaservicos" alt="rotinaservicos">
					</a>
					</th>
					</tr>
					<tr>
					<th style="font-family:Arial,sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;border-top-width:1px;border-bottom-width:1px;vertical-align:top;text-align:center" colspan="2">
					Mensagem recebida de '.$nome.', via formulário do site.
					</th>
					</tr>
					<tr></tr><tr>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top;border-right:1px solid #ccc">
					<b>NOME: </b>
					</td>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top">
					'.$nome.'
					</td>
					</tr><tr>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top;border-right:1px solid #ccc">
					<b>EMAIL: </b>
					</td>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top">
					<a href="mailto:'.$email.'" target="_blank">'.$email.'</a>
					</td>
					</tr><tr>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top;border-right:1px solid #ccc">
					<b>ASSUNTO: </b>
					</td>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top">
					'.$assunto.'
					</td>
					</tr><tr>
					</tr><tr>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top;border-right:1px solid #ccc">
					<b>MENSAGEM: </b>
					</td>
					<td style="font-family:Arial,sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top">
					'.$mensagem.'
					</td>
					</tr>
					<tr>
					<td style="text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top" colspan="2">
					Mensagem automática enviada por - rotinaservicos.com em '.$data_hoje.'
					</td>
					</tr>
					<tr>
					<td style="text-align:center;font-family:Arial,sans-serif;font-size:9px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top" colspan="2">
					<a href="https://www.rotinaservicos.com/">https://www.rotinaservicos.com/</a>
					</td>
					</tr>
					</tbody></table>
					<img src="https://static.wixstatic.com/media/a127fb_44ac34601ebc4ec781943876ab9e9894~mv2.jpg/v1/fill/w_440,h_413,al_c,lg_1,q_80/LOGO%20ATUAL.webp" alt="" width="1" height="1" border="0" style="height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important"></font></div>
				</div>
			</div>

			'; 
			
			// Opcional: Anexos 
			// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
			//anexar arquivo
			// if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
			//     $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
			//     $_FILES['uploaded_file']['name']);
			// }
			$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
			// Envia o e-mail 
			$enviado = $mail->Send(); 
			// Exibe uma mensagem de resultado 
			if ($enviado) { 
				echo "ok"; 
			} else {
				echo 'err';
			}

		} else {

			echo 'recaptcha';

		}

	} else {

		echo 'recaptha';

	}

} else {

	echo 'robo';

}
 
?>