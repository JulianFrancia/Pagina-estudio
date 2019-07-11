<?php
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$telefono=$_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $Nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .= "Su apellido es: " . $Apellido . " \r\n";
$mensaje .= "Su número de telefono es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'julianfrancia110@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:Home.html");
?>