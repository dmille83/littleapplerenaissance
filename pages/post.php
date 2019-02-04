<?php 
ini_set('display_errors', 1);
echo "<strong>PHP POST:</strong>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<?php
$to = "littleapplerenfest@gmail.com";
$subject = "YOUR SUBJECT HERE";
$body = "YOUR BODY GOES HERE";
$headers = "MIME-Version: 1.0/r/nContent-Type: text/html; charset=UTF-8";
//$headers = "From: danemiller22@gmail.com/r/nX-Mailer: PHP/". phpversion();
$mail_success = mail($to, $subject, $body, $headers);
if ($mail_success == true) {
	echo "<p>Thank you for contacting us. We will be in touch with you very soon.</p>";
} else {
	echo "Email sending failed!";
}
?>