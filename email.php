<?php
require_once 'vendor/autoload.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'ssl'))
      ->setUsername('cpsc4910')
      ->setPassword('qibsjtznpummrtcg')
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Wonderful Subject'))
      ->setFrom(['cpsc4910@gmail.com' => 'John Doe'])
      ->setTo(['tbreck11@gmail.com' => 'A name'])
      ->setBody('Here is the message itself')
      ;

    // Send the message
    $result = $mailer->send($message);
?>
