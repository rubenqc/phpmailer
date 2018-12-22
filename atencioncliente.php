<?php

	if(!empty($_POST)){ 

		include 'phpmailer/PHPMailerAutoload.php';

		extract($_POST, EXTR_PREFIX_ALL, 'p');

		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP();
		$mail->Host = 'smtp.office365.com';
		$mail->Port       = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth   = true;
		$mail->Username = 'infoetna@etna.com.pe';
		$mail->Password = '$3tInf0n@365$';
		$mail->SetFrom('infoetna@etna.com.pe', 'Atencion al cliente');
		


		$mail->addAddress('psac@etna.com.pe', 'psac');
		// $mail->addAddress('marketing@etna.com.pe', 'Marketing ETNA'); anterior

		$mail->addAddress('psac@etna.com.pe', 'externo3');
		$mail->addAddress('marketing@etna.com.pe', 'externo4');



		$mail->addAddress('ntriveno@etna.com.pe', 'Nerida Triveño');
		$mail->addAddress('SAC0205@etnaperu.onmicrosoft.com', 'SAC');
		$mail->addAddress('rsalvatierra@etna.com.pe', 'Raúl Salvatierra');
		$mail->addAddress('psac@etna.com.pe', 'psac');
		// $mail->addAddress('adiaz@etna.com.pe', 'Andrea Díaz');
		$mail->addAddress('marketing@etna.com.pe', 'Marketing ETNA');
		$mail->addAddress('SAC@etna.com.pe', 'Otro SAC');
		$mail->addAddress('kdelgado@mullenlowe.pe', 'externo1');
		$mail->addAddress('Evelezg@mullenlowe.pe', 'externo2');

		$mail->IsHTML(true);

		$mail->Subject = 'Contacto atencion al cliente';
		$mail->Body    = '<p>Mensaje enviado desde formulario de atencion al cliente:<p><ul><li>Canal de atención: '.$p_atencion.'</li><li>'.$p_tipodoc.': '.$p_numdoc.'</li><li>Nombre: '.$p_nombre.'</li><li>Email: '.$p_email.'</li><li>Celular: '.$p_celular.'</li><li>Mensaje: '.$p_mensaje.'</li></ul>';

		$mail->send();

		echo "yaju";

	}

	else{
		header("Location: /",TRUE,303);
	}

?>