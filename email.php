<?php
require_once './vendor/autoload.php';
 
// Create the SMTP Transport
$transport = (new Swift_SmtpTransport('smtp.hostname', 25))
	 ->setUsername('cpsc4910@gmail.com')
         ->setPassword('CPSC4910Team10');

$mailer = new Swift_Mailer($transport);

$content = "This is a test message from website";

$message = new Swift_Message("This is a test!");
$message
	->setFrom(["CPSC4910@gmail.com" => "Team10"])
	->setTo(["tbreck11@gmail.com" => "Tanner"])
	->setBody($content, 'text/html')
	->addPart(strip_tags($content), 'text/plain');

$result = $mailer->send($message);
?>
