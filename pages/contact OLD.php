<?php

//ini_set('display_errors', 1);

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

// DEFAULT VALUES
$first_name = null; // required
$last_name = null; // required
$email_from = null; // required
$telephone = null; // not required
$message = null; // required

if(isset($_POST['email'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "littleapplerenfest@gmail.com";
	$email_subject = "Little Apple Ren Fest - Contact Us";
	
	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please <a href='javascript:void(0);' onclick='window.history.back();'>go back</a> and fix these errors before re-submitting the form.<br /><br />";
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
	$message = $_POST['message']; // required

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($email_exp, $email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
	
	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}

	if(!preg_match($string_exp,$last_name)) {
		$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	}

	if(strlen($message) < 2) {
		$error_message .= 'The Message you entered does not appear to be valid.<br />';
	}
	
	if(strlen($error_message) > 0) {
		died($error_message);
	}

	$email_message = "Form details below.<br />";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		$string = htmlspecialchars($string, ENT_COMPAT);
		$string = nl2br($string); // replace "/n" with "<br />"
		return str_replace($bad,"",$string);
	}
	
	$email_message .= "<strong>First Name:</strong> ".clean_string($first_name)."<br />";
	$email_message .= "<strong>Last Name:</strong> ".clean_string($last_name)."<br />";
	$email_message .= "<strong>Email:</strong> ".clean_string($email_from)."<br />";
	$email_message .= "<strong>Telephone:</strong> ".clean_string($telephone)."<br />";
	$email_message .= "<strong>Message:</strong> ".clean_string($message)."<br />";
	$email_message = wordwrap($email_message, 70);
 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	"Content-Type: text/html; charset=UTF-8\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$mail_success = mail($email_to, $email_subject, $email_message, $headers);
	
	//echo "<br />" . nl2br($headers) . "<br /><br />" . $email_message;
	
	echo "<p style='font-weight: bold; font-style: italic;'>";
	if ($mail_success == true) {
		echo "Thank you for contacting us. We will be in touch with you very soon.<br /> <br /><a href='mailto:littleapplerenfest@gmail.com'>littleapplerenfest@gmail.com</a>";
		
		// EMPTY THE INPUT FIELDS IF THE FORM WAS SUBMITTED SUCCESSFULLY
		$first_name = null; // required
		$last_name = null; // required
		$email_from = null; // required
		$telephone = null; // not required
		$message = null; // required
		
	} else {
		echo "Failed to send email to <a href='mailto:littleapplerenfest@gmail.com'>littleapplerenfest@gmail.com</a>";
	}
	echo "</p>";
	
} else {
	
	//echo "<p>Nothing submitted.</p>";
	//include('pages/contact.html');
	
}
?>

<form id="contactform" name="contactform" method="post" action="contact">
	<h3 style="margin-bottom: 7px;">Please submit your information using the form below:</h3>
	<div>
		We may also be reached on <a href="https://www.facebook.com/LittleAppleRenFest" title="Facebook" target=_blank>Facebook</a> or by email at <a href='mailto:littleapplerenfest@gmail.com'>littleapplerenfest@gmail.com</a>
		<br />&nbsp;
	</div>
	<table width="450px">
		<tr>
			<td>
				<label for="first_name">First Name *</label>
			</td>
			<td>
				<input type="text" name="first_name" maxlength="50" size="30">
			</td>
		</tr>
		<tr>
			<td>
				<label for="last_name">Last Name *</label>
			</td>
			<td>
				<input type="text" name="last_name" maxlength="50" size="30">
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">Email Address *</label>
			</td>
			<td>
				<input type="text" name="email" maxlength="80" size="30">
			</td>
		</tr>
		<tr>
			<td>
				<label for="telephone">Telephone Number</label>
			</td>
			<td>
				<input type="text" name="telephone" maxlength="30" size="30">
			</td>
		</tr>
		<tr>
			<td>
				<label for="message">Message *</label>
			</td>
			<td>
				<textarea name="message" maxlength="1000" cols="25" rows="6"></textarea>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td style="text-align:left">
				<input type="submit" value="Submit">
			</td>
		</tr>
	</table>
</form>