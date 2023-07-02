<?php
// Email address where the info is going to be sent Ej: juan@gmail.com
$targetMail = "criptomonedasdominicanrepublic@gmail.com";

// Senders email Address Ej. sergio@mail.com
$sender = "inteligenciaartificial.do@gmail.com";

// Senders name EJ. Sergio Sanchez
$senderName = "INTELIGENCIA ARTIFICIAL";

// Mail subject Ej: Evento formulario
$subject = "Informacion en inteligencia artificial";

// Introductory text in the mail
$introductionText = "An introductory text that will be shown on the start of the e-mail\r\n";

$body = "";
foreach ($_GET as $key => $value) {
    $body .= $key . ": " . $value . "\r\n";
}

$msg = $introductionText . "<br><hr><br>" . $body;

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From:" . $senderName . "<" . $sender . ">\r\n";

mail($targetMail, $subject, $msg, $headers);
echo "A text the user will see once the form has been sent";