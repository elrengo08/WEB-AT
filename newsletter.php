<?php 

$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$localidad = $_POST['localidad'];
//$consulta = $_POST['consulta']; // variables vinculadas al "input name" del html

$to = "info@agro-thrive.com"; // destinatario original

$subject = "Inscripción Newsletter - web"; // asunto de mail para destinatario
$subject2 = "Copia de tu Inscripción Newsletter AgroThrive"; // asunto de mail para copia a remitente

if(isset($_POST['submit'])){

    $headers = "From: info@agro-thrive.com\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
    // $headers .= "Cc: ". $co . "\r\n";
    // $headers .= "Bcc: ". $bcc . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = '<html><body>';

    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . $nombre . "</td></tr>";
	$message .= "<tr><td><strong>Teléono:</strong> </td><td>" . $tel . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
	$message .= "<tr style='background: #eee;'><td><strong>Localidad:</strong> </td><td>" . $localidad . "</td></tr>";
	//$message .= "<tr style='background: #eee;'><td><strong>Consulta:</strong> </td><td>" . $consulta . "</td></tr>";
    
    $message .= "</table>";
    $message .= "</body></html>";
    mail($to, $subject, $message, $headers);
	header('Location: https://agro-thrive.com/gracias.htm');
 }
?>