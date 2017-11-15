<?php
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

if(isset($_POST['formdata'])){
	$formdata=$_POST['formdata'];
	$label=$_POST['label'];

	
	$home_page_form=fopen( "Home_page_form.txt", "a") or die("Unable to open file!");

	if($label=='Email'){
		fwrite($home_page_form,"\n$formdata");
			$to = $formdata;
			$link="<a href='http://www.dan4nevada.com'>dan4nevada.com</a>";
	// 		$subject = 'Thank you for signing!';
	// 		$body = "Thank you for joining Dan's team!";
	// 		$headers="";
	// 		//$headers = "FROM: Dan Schwartz";
 
	// mail( $to, $subject, $body, $headers );
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			//Set who the message is to be sent from
			$mail->setFrom('dan4nevada@Danfornevada.com', 'Dan Schwartz');
			//Set an alternative reply-to address
			//$mail->addReplyTo('replyto@example.com', 'First Last');
			//Set who the message is to be sent to
			$mail->addAddress($formdata, '');
			//Set the subject line
			$mail->Subject = "Thank you for joining Dan's team!";
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->Body="Thank you for joining Dan's team! We really appreciate you supporting our cause. Let's make the Nevada government lobbyist free!\nDan Schwartz \nConservative businessman running for Governor of Nevada\ndan4nevada.com";
			//Replace the plain text body with one created manually
			//$mail->AltBody = 'This is a plain-text message body';
			//Attach an image file
			//$mail->addAttachment('images/phpmailer_mini.png');
			//send the message, check for errors
			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			    echo "Message sent!";
			}

	}
	else{
		fwrite($home_page_form,"\t$formdata");	
	}

	

	fclose($home_page_form);

	
}


?>