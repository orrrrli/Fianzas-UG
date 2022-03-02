<?php

$phone=$_POST["phone"];

$header="From: " . $mail . "\r\n";
$header.="X-Mailer: PHP/". phpversion() . "\r\n";
$header.="Mime-Version: 1.0 \r\n";
$header.="Content-Type: text/plain";

$message.="Telefono de contacto: ". $phone . "\r\n";
$message.="Enviado el: " . date("d/m/Y", time());

$para = "keorcasa@gmail.com";
$asunto="Telefono de contacto de la pagina web";

mail($para, $asunto, utf8_decode($message), $header);
header("Location:index.html");
  
?>