<?php 
$name = htmlspecialcharts($_POST['name']);
$email = htmlspecialcharts($_POST['email']);
$subject = htmlspecialcharts($_POST['subject']);
$message = htmlspecialcharts($_POST['message']);
	if($name == ' ' || $email == ' '|| $subject == ' ' || $message == ' '){
		echo 'fill yhe blankes'
		exit;
	}
	$subject = "=?utf-8?B?".base64_encode($subject)."'?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset= utf-8\r\n";
	if(mail("test@mail.ru",$subject, $message, $headers)) /*write your email*/
	echo "message has been sended";
	else
	echo "Message has NOT been sended";
?>