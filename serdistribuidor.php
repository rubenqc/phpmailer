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
		$mail->SetFrom('infoetna@etna.com.pe', 'registro distribuidor');


		$mail->addAddress('psac@etna.com.pe', 'externo3');
		$mail->addAddress('marketing@etna.com.pe', 'externo4');
		$mail->addAddress('kdelgado@mullenlowe.pe', 'externo1');
		$mail->addAddress('Evelezg@mullenlowe.pe', 'externo2');

		if($p_pais == 'Peru'){
			$mail->addAddress('jpaz@etna.com.pe', 'Destinatario1');
			$mail->addAddress('rsalvatierra@etna.com.pe', 'Destinatario2');
			// $mail->addAddress('adiaz@etna.com.pe', 'Destinatario3');
			$mail->addAddress('marketing@etna.com.pe', 'Destinatario4');
			$mail->addAddress('gfernandez@etna.com.pe', 'Destinatario5');
			$mail->addAddress('scuba@etna.com.pe', 'Destinatario7');
			$mail->addAddress('rnoriega@etna.com.pe', 'Destinatario8');
		}
		else{
			$mail->addAddress('fkonno@etna.com.pe', 'Destinatario1');
			$mail->addAddress('fmartel@etna.com.pe', 'Destinatario2');
			$mail->addAddress('scuba@etna.com.pe', 'Destinatario3');
			// $mail->addAddress('Adiaz@etna.com.pe', 'Destinatario4');
			$mail->addAddress('rsalvatierra@etna.com.pe', 'Destinatario5');
			$mail->addAddress('marketing@etna.com.pe', 'Destinatario6');
		// }

		$mail->IsHTML(true);

		$mail->Subject = 'OPORTUNIDAD DE NEGOCIO: QUIERO SER DISTRIBUIDOR';
		$mail->Body    = '<p>Mis datos son:<p><ul><li>País: '.$p_pais.'</li><li>Nombres Completos: '.$p_nombres.'</li><li>Razón Social: '.$p_razon.'</li><li>Correo: '.$p_email.'</li><li>Dirección: '.$p_direccion.'</li><li>Mensaje: '.$p_mensaje.'</li></ul>';

		$mail->send();

		echo "yaju";

	}
	else{
		header("Location: /",TRUE,303);
	}

?>