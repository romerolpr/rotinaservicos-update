<?php

## definindo variavel do host
$host = $_SERVER['HTTP_HOST'];

## variável para desligar a verificação do recaptcha, se "true" habilita o recaptcha para testes
$switch = true;

date_default_timezone_set('America/Sao_Paulo');

//phpmailer
require_once("PHPMailer/PHPMailer-master/PHPMailerAutoload.php");

//inclui variáveis mail
include("define.inc.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();
// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->SMTPDebug = false; //debug
$mail->Host = HOST; // Seu endereço de host SMTP
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = base64_decode( EMAIL_USER ); // Conta de email existente e ativa em seu domínio
$mail->Password = base64_decode( EMAIL_PASS ); // Senha da sua conta de email

// DADOS DO REMETENTE
// $mail->Sender = 'contato@rotinaservicos.com'; // Conta de email existente e ativa em seu domínio
$mail->From = EMAIL_PRINCIPAL; // Sua conta de email que será remetente da mensagem
$mail->FromName = COMPANY; // Nome da conta de email

// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

?>