<?php

	// Before anything, check for security question
	// Uncomment if security question is added
	/*
	if($_POST["math"] != "16"){
		echo "Wrong answer to the security question.";
		return;
	}*/

	// Compose email

	$end_line = "\xA";

	$bodytext = "/** Nom et adresse **/" . $end_line . $end_line;

	$bodytext .= "Nom: " . $_POST["name"] . $end_line;
	$bodytext .= "Email: " . $_POST["email"] . $end_line;

	$bodytext .= $end_line;

	$bodytext .= "/** Message **/" . $end_line . $end_line;

	$bodytext .= $_POST["message"] . $end_line;

	// send email with attachements

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "thirdbridgemailsend@gmail.com";
	$mail->Password = "gHt-CwE-tEx-h2F";

	$mail->setFrom('contactform@commissaire-off.com', 'Contact Form');
	$mail->addAddress('nicolas@t-b.ca', 'Nicolas');
	$mail->addAddress('hello.duc.tran@gmail.com', 'Duc');
	$mail->addAddress('zlavertu@gmail.com', 'Zac');
	$mail->Subject = 'Contact form ';
	$mail->Body = $bodytext;

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo 1;
	}

?>
