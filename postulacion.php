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
		$mail->SetFrom('infoetna@etna.com.pe', 'Correo Postulantes');
		
		$mail->addAddress('psac@etna.com.pe', 'externo3');
		$mail->addAddress('marketing@etna.com.pe', 'externo4');
		$mail->addAddress('ncampos@etna.com.pe', 'Campos');
		$mail->addAddress('marketing@etna.com.pe', 'Correo Marketing');
		$mail->addAddress('seleccion@etna.com.pe', 'Selección');
		$mail->addAddress('jnieuwland@etna.com.pe', 'jnieuwland');


		$mail->IsHTML(true);

		$mail->Subject = 'Postulantes [Notificacion]';
		$mail->Body    = '<p>Se ha registrado un nuevo postulante:<p><ul><li>Nombre: '.$p_nombre.'</li><li>Apellidos: '.$p_paterno.' '.$p_materno.'</li><li>Correo: '.$p_email.'</li><li>Ultimo centro laboral: '.$p_trabajo.'</li><li>Link CV: <a href="'.$p_urle.'" target="_blank">Ver Curriculum</a></li></ul>';

		$mail->send();

		echo "yaju";

	}
	else{
		header("Location: /",TRUE,303);
	}

?>