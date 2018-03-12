<?php
$nombre = $_POST['nombre'];
$ape = $_POST['apellido'];
$mail = $_POST['email'];
$message = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . $ape . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'smis117111@gmail.com';
$asunto = 'Taller de Cuerda Frotada UGB - CONTACTO';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");
?>