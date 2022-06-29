<?php

    $to = "cibeiramassimo@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $number = $_POST['number'];
    $cmessage = $_POST['message'];

    $header = "enviado";
	$mensajeCompleto = $cmessage . "\nAtentamente: " . $name;
	mail($to, $mensajeCompleto, $header);

?>
