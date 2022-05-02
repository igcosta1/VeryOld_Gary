<?php
	require_once('PHPMailer/class.phpmailer.php');

	$mail = new PHPMailer;
	$mail->IsSMTP();        // Ativar SMTP
	$mail->SMTPDebug = false;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = false;     // Autenticação ativada
	$mail->Host = '10.1.10.195'; // SMTP utilizado
	$mail->Port = 25;
	$mail->Username = 'engenhari.digital@snclavalin.com';
	$mail->Password = '';
	$mail->SetFrom('engenhari.digital@snclavalin.com');
	$mail->addAddress("igor.silva@snclavalin.com");
	$mail->Subject = utf8_decode("Email de Teste xxxxxxx");
	$mail->msgHTML(utf8_decode("Mensagem de teste enviada pelo Gary ao Igor ou Matheus"));
	if ($mail->send()) {
		$ok = true;
	} else {
		$ok = false;
	}
?>