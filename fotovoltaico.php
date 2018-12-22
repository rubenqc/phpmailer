<?php

	if(!empty($_POST)){ 

		include 'phpmailer/PHPMailerAutoload.php';

		$e_coment = $_POST['e_coment'];
		$p_mail = $_POST['p_mail'];
		$e_nombre = $_POST['e_nombre'];
		$p_cel = $_POST['p_cel'];

		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP();
		$mail->Host = 'smtp.office365.com';
		$mail->Port       = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth   = true;
		$mail->Username = 'infoetna@etna.com.pe';
		$mail->Password = '$3tInf0n@365$';
		$mail->SetFrom('infoetna@etna.com.pe', 'Registro Fotovoltaico');

		$mail->addAddress('psac@etna.com.pe', 'externo3');
		$mail->addAddress('marketing@etna.com.pe', 'externo4');
		
		$mail->addAddress('rsalvatierra@etna.com.pe', 'Raul Salvatierra');
		//$mail->addAddress('adiaz@etna.com.pe', 'Andrea Diaz');
		$mail->addAddress('Marketing@etna.com.pe', 'Area Marketing');
		$mail->addAddress('Etnaexpress@etna.com.pe', 'Mail EtnaExpress');

		$mail->IsHTML(true);

		$mail->Subject = 'Registro Fotovoltaico';
		$mail->Body    = '<p>Nuevo registro en Fotovoltaico:<p><ul><li>Nombre Completo: '.$e_nombre.'</li><li>Celular: '.$p_cel.'</li><li>Correo: '.$p_mail.'</li><li>Comentarios: '.$e_coment.'</li></ul>';

		$mail->send();

		echo "yaju";

	}
	else{
		header("Location: /",TRUE,303);
	}

?>