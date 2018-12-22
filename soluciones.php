<?php

	if(!empty($_POST) && $_POST["g-recaptcha-response"] != ''){ 


		
		include 'phpmailer/PHPMailerAutoload.php';

		$e_coment = $_POST['e_coment'];
		$p_mail = $_POST['p_mail'];
		$e_nombre = $_POST['e_nombre'];
		$p_cel = $_POST['p_cel'];
		$ciudad = $_POST['ciudad'];
		$solucion = $_POST['solucion'];

		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP();
		$mail->Host = 'smtp.office365.com';
		$mail->Port       = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth   = true;
		$mail->Username = 'infoetna@etna.com.pe';
		$mail->Password = '$3tInf0n@365$';
		$mail->SetFrom('infoetna@etna.com.pe', 'Soluciones ETNA');

		$solucion = str_replace('/', '', $solucion);
	
		// $mail->addAddress('kdelgado@mullenlowe.pe', 'externo1'); anterior
		// $mail->addAddress('Evelezg@mullenlowe.pe', 'externo2'); anterior

		$mail->addAddress('psac@etna.com.pe', 'externo3');
		$mail->addAddress('marketing@etna.com.pe', 'externo4');
		// $mail->addAddress('i.bravo@addconsulta.pe', 'Testing');

		if($ciudad == 'Exterior'){

			// $mail->addAddress('etnaexpo@etna.com.pe', 'mail4'); anterior
			




			//$mail->addAddress('fkonno@etna.com.pe', 'mail4');

			// switch ($solucion) {
			// 	case 'soluciones-automotrices': case 'soluciones-canales-de-distribucion':
			// 		$mail->addAddress('scuba@etna.com.pe', 'mail5');
			// 	break;
				
			// 	case 'soluciones-empresas':
			// 		$mail->addAddress('lmedina@etna.com.pe', 'mail5');
			// 	break;

			// 	case 'soluciones-marina': case 'soluciones-golf': case 'soluciones-energia-sostenible':
			// 		$mail->addAddress('cpellegrin@etna.com.pe', 'mail5');
			// 	break;
			// }

			// if($solucion != 'soluciones-automotrices'){
			// 	$mail->addAddress('fmartel@etna.com.pe', 'mail6');
			// }
		}
		else{

			// $mail->addAddress('rsalvatierra@etna.com.pe', 'mail1'); anterior
			// $mail->addAddress('adiaz@etna.com.pe', 'mail2'); anterior
			// $mail->addAddress('Marketing@etna.com.pe', 'mail3'); anterior
			// $mail->addAddress('gfernandez@etna.com.pe', 'mail4'); anterior 

			switch ($solucion) {
				case 'soluciones-automotrices': case 'soluciones-canales-de-distribucion':
					// $mail->addAddress('jpaz@etna.com.pe', 'mail6'); anterior 
					// $mail->addAddress('scuba@etna.com.pe', 'mail7'); anterior
					// $mail->addAddress('rnoriega@etna.com.pe', 'mail21');	anterior
				break;

				case 'soluciones-empresas':
					// $mail->addAddress('scuba@etna.com.pe', 'mail6');	anterior
				break;

				case 'soluciones-marina': case 'soluciones-golf': case 'soluciones-energia-sostenible':
					// $mail->addAddress('cpellegrin@etna.com.pe', 'mail6'); anterior
				break;
			}
		}

		$solucion = str_replace('-', ' ', $solucion);

		$mail->IsHTML(true);

		$mail->Subject = 'OPORTUNIDAD DE NEGOCIO WEB CORPORATIVA: '.$solucion;
		$mail->Body    = '<p>Nuevo contacto soluciones:<p><ul><li>Nombre Completo: '.$e_nombre.'</li><li>Celular: '.$p_cel.'</li><li>Ubicación: '.$ciudad.'</li><li>Categoría: '.$solucion.'</li><li>Email: '.$p_mail.'</li><li>Comentarios: '.$e_coment.'</li></ul>';

		$mail->send();

		echo "yaju";

	}

	else{
		header("Location: /",TRUE,303);
	}

?>