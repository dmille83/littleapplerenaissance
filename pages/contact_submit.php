<?php

ini_set('display_errors', 1);
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if(isset($_POST['email'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "littleapplerenfest@gmail.com";
	$email_subject = "Little Apple Ren Fest - Contact Us";
	
	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}


	// validation expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['last_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['message'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');			 
	}

	$first_name = $_POST['first_name']; // required
	$last_name = $_POST['last_name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$message = $_POST['message']; // require

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
 
	$string_exp = "/^[A-Za-z .'-]+$/";
 
	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}
 
	if(!preg_match($string_exp,$last_name)) {
		$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	}
 
	if(strlen($message) < 2) {
		$error_message .= 'The message you entered does not appear to be valid.<br />';
	}
 
	if(strlen($error_message) > 0) {
		died($error_message);
	}

	$email_message = "Form details below.<br />";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		$string = htmlspecialchars($string, ENT_COMPAT);
		return str_replace($bad,"",$string);
	}
	
	$email_message .= "First Name: ".clean_string($first_name)."<br />";
	$email_message .= "Last Name: ".clean_string($last_name)."<br />";
	$email_message .= "Email: ".clean_string($email_from)."<br />";
	$email_message .= "Telephone: ".clean_string($telephone)."<br />";
	$email_message .= "Message: ".clean_string($message)."<br />";
	$email_message = wordwrap($email_message, 70);
	
	//echo $email_message;
 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	"Content-Type: text/html; charset=UTF-8\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$mail_success = mail($email_to, $email_subject, $email_message, $headers);
	
	if ($mail_success == true) {
		echo "<p>Thank you for contacting us. We will be in touch with you very soon.</p>";
	} else {
		echo "Email sending failed!";
	}

} else {
	
	//echo "<p>Nothing submitted.</p>";
	include('pages/contact.html');
	
}
?>