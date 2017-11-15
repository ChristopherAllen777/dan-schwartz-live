<?php
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

//echo "testwithtout";
if(isset($_POST['formdata'])){
	$formdata=$_POST['formdata'];
	//$form=(json_decode($formdata));

	$volunteerForm=fopen( "Volunteer_Page_Form.txt", "a") or die("Unable to open file!");
	fputcsv($volunteerForm, $dataline, "sep=\t".PHP_EOL);
	$dataline=array();
	$emailAddress="";
	$firstName="";
	$lastName="";
	foreach($formdata as $data){

		$datavalue= $data['formvalue'];
		$email=$data["label"];
		if($email=="email"){
			$emailAddress=$datavalue;
		}
		if($email=="firstName"){
			$firstName=$datavalue;
		}
		if($email=="lastName"){
			$lastName=$datavalue;
		}
		array_push($dataline,$datavalue);
	}
	$date=date("m/d/Y");
	array_push($dataline,$date);
	fputcsv($volunteerForm, $dataline, "\t");

	// if($label=='Email'){
	// 	fwrite($volunteerForm,"\n$formdata");
	// }
	// else{
	// 	fwrite($volunteerForm,"\t$formdata");	
	// }

	

	fclose($volunteerForm);
	//echo $emailAddress;

	//$headers = array('Content-Type: text/html; charset=UTF-8');
 
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			//Set who the message is to be sent from
			$mail->setFrom('dan4nevada@Danfornevada.com', 'Dan Schwartz');
			//Set an alternative reply-to address
			//$mail->addReplyTo('replyto@example.com', 'First Last');
			//Set who the message is to be sent to
			$mail->addAddress($emailAddress, '');
			//Set the subject line
			$mail->Subject = "Thank you for signing!";
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->Body="Dear $firstName $lastName,\nThank for signing up to take the For Sale sign down in Carson City. Your efforts will not be overlooked!\nDan Schwartz\nConservative businessman running for Governor of Nevada\ndan4nevada.com";
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
	print_r(error_get_last());


	
}


?>