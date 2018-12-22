<?php

	include 'phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port       = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth   = true;
	// $mail->Username = 'a.tacuri@addconsulta.pe';
	// $mail->Password = 'ingenieriainversa';
	$mail->Username = 'i.bravo@addconsulta.pe';
	$mail->Password = 'ivan2601';
	
	$mail->SetFrom('i.bravo@addconsulta.pe', 'Iván Bravo');

	$mail->addAddress('r.quispe@addconsulta.pe', 'Rubén Quispe');

	// $mail->addAddress('i.bravo@addconsulta.pe', 'Iván Bravo');
	// $mail->addAddress('comunicaciones.peru@hudbayminerals.com', 'Comunicaciones Hudbay');
	// $mail->addAddress('sandra.lupaca@hudbayminerals.com', 'Sandra Lupaca');
	// $mail->addAddress('viviann.arauzo@hudbayminerals.com', 'Vivian Arauzo');
	// $mail->addAddress('percy.andrade@hudbayminerals.com', 'Percy Andrade');
	// $mail->addAddress('javier.montoya@hudbayminerals.com', 'Javier Montoya');

	$mail->IsHTML(true);

	$mail->Subject = 'Boletin Semanal Hudbay 06/12';
	$mail->Body    = '<!DOCTYPE html><html lang="es"><head> <meta charset="UTF-8"> <title>Somos Hudbay</title></head><body style="margin: 0"> <center> <table border="0" cellpadding="0" cellspacing="0"> <tbody> <tr> <td valign="top"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart1.jpg" style="display: block"> <img src="https://addconsulta.pe/imgmail/hudbay/2018/cabecera/header101112.png" style="display: block"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart3.jpg" style="display: block"> </td> </tr> <tr> <td valign="top"> <a href="#" style="cursor: default;"> <img src="https://addconsulta.pe/imgmail/hudbay/2018/noticias/noticias101112.gif" alt="Noticias" style="display: block;" alt="Noticias" usemap="#ini"> </a> <map name="ini" id="ini"> <area shape="rect" coords="23,89,283,274" href="https://addconsulta.pe/hudbay/noticias/2018/10dic-16dic.php" target="_blank" /> <area shape="rect" coords="325,98,641,277" href="https://addconsulta.pe/hudbay/noticias/2018/10dic-16dic.php" target="_blank" /> <area shape="rect" coords="23,346,282,529" href="https://addconsulta.pe/hudbay/noticias/2018/10dic-16dic.php?noticia=1" target="_blank" /> <area shape="rect" coords="323,353,646,534" href="https://addconsulta.pe/hudbay/noticias/2018/10dic-16dic.php?noticia=1" target="_blank" /> <area shape="rect" coords="23,611,283,794" href="https://addconsulta.pe/hudbay/noticias/2018/10dic-16dic.php?noticia=2" target="_blank" /> <area shape="rect" coords="324,618,644,799" href="https://addconsulta.pe/hudbay/noticias/2018/10dic-16dic.php?noticia=2" target="_blank" /> </map> </td> </tr> <tr> <td valign="top"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart4.jpg" style="display:block"> <img src="https://addconsulta.pe/imgmail/hudbay/2018/calendario/fechas/fechas101112.png" style="display:block"> <img src="https://addconsulta.pe/imgmail/hudbay/2018/calendario/textos/textos1-101112.png" style="display:block"> <img src="https://addconsulta.pe/imgmail/hudbay/2018/calendario/botones/botones1-101112.png" style="display:block" usemap="#adios"> <map id="adios" name="adios"> <area shape="rect" alt="Inscribete" title="Inscríbete" coords="611,6,673,20" href="https://mail.google.com/mail/?view=cm&fs=1&to=capacitaciones.constancia@hudbayminerals.com" target="_blank" /> <area shape="rect" alt="Agendar" title="Agendar" coords="596,31,688,59" href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Recuperación+de+Cursos+Obligatorios&dates=20181216T190000Z/20181216T230000Z&location=Campamento+Constancia&ctz=America/Lima&sf=true" target="_blank" /> </map> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart12.jpg" style="display:block"> </td> </tr> <tr> <td valign="top"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart13.jpg" style="display: block"> <table cellpadding="0" cellspacing="0" border="0"> <tbody> <tr> <td width="47" bgcolor="#ffffff"> </td> <td width="233"> <a href="https://goo.gl/forms/962jkZWLHdIUNTB33" target="_blank"><img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart21.jpg" style="display: block;"></a> </td> <td width="45" bgcolor="#ffffff"> </td> <td width="248"> <a href="https://addconsulta.pe/hudbay/cumpleanos/diciembre.php" target="_blank"><img src="https://addconsulta.pe/imgmail/hudbay/2018/bloque-cumple/cumple101112.png" style="display: block;"></a> </td> <td width="47" bgcolor="#ffffff"> </td> </tr> </tbody> </table> </td> </tr> <tr bgcolor="#EBECEE"> <td valign="top"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart14.jpg" style="display: block"> </td> </tr> <tr> <td valign="top"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart15.jpg" style="display: block"> <table border="0" cellpadding="0" cellspacing="0"> <tbody> <tr> <td width="205" bgcolor="#EBECEE"><img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart17.jpg" alt="Para Piensa Actúa" style="display: block;" usemap="#ppp"> <map id="ppp" name="ppp"> <area shape="rect" alt="Para Piensa Actúa" title="Para Piensa Actúa" coords="0,24,202,129" href="https://addconsulta.pe/hudbay/Para-Piensa-Actua.html" target="_blank" /> </map> </td> <td width="79" bgcolor="#EBECEE"> </td> <td width="148" bgcolor="#EBECEE"><img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart19.jpg" style="display: block;" usemap="#llsh"> <map id="llsh" name="llsh"> <area shape="rect" alt="Llacta Runaq" title="Llacta Runaq" coords="1,11,146,87" href="https://addconsulta.pe/hudbay/Llaqta-Runaq.html" target="_blank" /> <area shape="rect" alt="Somos HUDBAY" title="Somos HUDBAY" coords="1,112,147,168" href="https://addconsulta.pe/hudbay/Somos-Hudbay.html" target="_blank" /> </map> </td> <td width="79" bgcolor="#EBECEE"> </td> <td width="209" bgcolor="#EBECEE"><img src="https://addconsulta.pe/imgmail/hudbay2/bskpart.jpg" alt="BSK" style="display: block;" usemap="#bsk"> <map id="bsk" name="bsk"> <area shape="rect" alt="BSK" title="BSK" coords="0,20,208,132" href="https://addconsulta.pe/hudbay/BSK-Salud_Chequeo-Preventivo.jpg" target="_blank" /> </map> </td> </tr> </tbody> </table> <div style="text-align:center;background-color:#EBECEE;"> <p style="margin: 0"> <br><img src="https://addconsulta.pe/imgmail/hudbay/nuevito2.png" usemap="#nuevito"></p> <map id="nuevito" name="nuevito"> <area shape="rect" alt="Constancia TeVe" title="Constancia TeVe" coords="1,2,148,89" href="https://addconsulta.pe/hudbay/ConstanciaTV.html" target="_blank" /> <area shape="rect" alt="Normas Legales de Interes" title="Normas Legales de Interes" coords="1,107,147,195" href="https://addconsulta.pe/hudbay/normas-legales4.pdf" target="_blank" /> </map> <p style="margin: 0"> </p> </div> </td> </tr> <tr> <td valign="top"> <table border="0" cellpadding="0" cellspacing="0"> <tbody> <tr> <td width="240" bgcolor="#ffffff"> </td> <td width="241"> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=somoshudbay.peru@hudbayminerals.com" target="_blank"><img src="https://addconsulta.pe/imgmail/hudbay2/nohandpartmail.jpg" style="display: block"></a> </td> <td width="239" bgcolor="#ffffff"> </td> </tr> </tbody> </table> </td> </tr> <tr> <td valign="top"> <img src="https://addconsulta.pe/imgmail/hudbay2/nohandpart16b.jpg" style="display: block"> </td> </tr> </tbody> </table> </center></body></html>';

	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	}
	 else {
	    echo "Message sent!";
	}
?>