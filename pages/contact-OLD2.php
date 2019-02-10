<?php
// DEBUG:

//ini_set('display_errors', 1);

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
?>

<?php
// FUNCTIONS USED:

$email_message = "";
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
function died($error) {
	// your error code can go here
	echo "We are very sorry, but there were error(s) found with the form you submitted.<br />";
	echo "<span style='color: red;'>Please fix these errors before re-submitting the form.</span><br /><br />";
	echo $error;
	//die();
}
function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	$string = htmlspecialchars($string, ENT_COMPAT);
	$string = nl2br($string); // replace "/n" with "<br />"
	return str_replace($bad,"",$string);
}
function validateField($name, $var, $exp, $len) {
	global $email_message;
	global $error_message;
	global $$var;
	$err = "<ul>";
	$fails = false;
	if (!isset($_POST[$var])) {
		$fails = true;
		$err .= "<li>no value was submitted</li>";
	} else {
		$val = $_POST[$var];
		$$var = $val;
		if ($exp != "") { if (!preg_match($exp,$val)) { $fails = true; $err .= "<li>did not contain valid characters</li>"; } }
		if ($len > 0 && strlen($val) < $len) { $fails = true; $err .= "<li>shorter than ".$len." characters</li>"; }
	}
	$err .= "</ul>";
	if ($fails == true) {
		$error_message .= '<div>The ' . $name . ' you entered does not appear to be valid.' . $err . '</div>';
	} else {
		$email_message .= "<strong>" . $name . ":</strong> ".clean_string($val)."<br />";
	}
}

?>

<?php
// THIS FORM:

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "littleapplerenfest@gmail.com";
$email_subject = "Little Apple Ren Fest - Contact Us";

// DEFAULT VALUES
$first_name = null; // required
$last_name = null; // required
$email_from = null; // required
$telephone = null; // not required
$message = null; // required

if(isset($_POST['email_from'])) {
	
	validateField("Email Address", "email_from", $email_exp, 0);
	validateField("First Name", "first_name", $string_exp, 0);
	validateField("Last Name", "last_name", $string_exp, 0);
	$email_message .= "<strong>Telephone:</strong> ".clean_string($telephone)."<br />";
	validateField("Message", "message", "", 3);
	
	if(strlen($error_message) > 0) {
		died($error_message);
	} else {
		
		$email_message = "Form details below.<br />" . $email_message;
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
			echo "<span style='color: red;'>Failed to send email to </span><a href='mailto:littleapplerenfest@gmail.com'>littleapplerenfest@gmail.com</a>";
		}
		echo "</p>";
		
		if ($mail_success == true) { die(); }
		
	}

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
				<input type="text" name="first_name" maxlength="50" size="30" value="<?php echo $first_name; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="last_name">Last Name *</label>
			</td>
			<td>
				<input type="text" name="last_name" maxlength="50" size="30" value="<?php echo $last_name; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="email_from">Email Address *</label>
			</td>
			<td>
				<input type="text" name="email_from" maxlength="80" size="30" value="<?php echo $email_from; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="telephone">Telephone Number</label>
			</td>
			<td>
				<input type="text" name="telephone" maxlength="30" size="30" value="<?php echo $telephone; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="message">Message *</label>
			</td>
			<td>
				<textarea name="message" maxlength="1000" cols="25" rows="6"><?php echo $message; ?></textarea>
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