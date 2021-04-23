<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// $header = 'From: ' . $mail . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

$para = 'pruebascorreolfrc@gmail.com';
$asunto1 .= "Asunto: " . $asunto . " \r\n";

$carta = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$carta .= "Su e-mail es: " . $mail . " \r\n";
$carta .= "Mensaje: " . $mensaje . " \r\n";
$carta .= "Enviado el " . date('d/m/Y', time());

//Enviando mensaje

mail($para, $asunto1, utf8_decode($carta));

header("Location:index.html");
?>