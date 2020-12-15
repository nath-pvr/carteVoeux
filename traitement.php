<?php

require_once "vendor/autoload.php";

if (!empty($_POST)){
    // Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
->setUsername('a40fc1ba827b9d')
->setPassword('7c729b4ceb7881')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Vous avez une bonne nouvelle !'))
->setFrom([$_POST['expeMail']])
->setTo([$_POST['destMail']])
->setBody('<a href="http://localhost/carteVoeux/carte.php?expe='.$_POST['expediteur'].'">Vous avez reçu une carte de voeux de la part de '.$_POST['expediteur'].'</a>', 'text/html')
;

// Send the message
$result = $mailer->send($message);

}