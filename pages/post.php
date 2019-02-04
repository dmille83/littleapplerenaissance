<?php 

ini_set('display_errors', 1);

/*
echo "<strong>PHP POST:</strong>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

echo "<strong>PHP POST:</strong><br />";
printArray($_POST);
function printArray($array){
    foreach ($array as $key => $value){
		echo $key . " => " . nl2br(htmlspecialchars($value, ENT_COMPAT)) . "<br />";
        if(is_array($value)){ //If $value is an array, print it as well!
            printArray($value);
        }  
    } 
}

?>

<?php
/*
$email_from = "danemiller22@gmail.com";
$to = "littleapplerenfest@gmail.com";
$subject = "YOUR SUBJECT HERE";
$body = "YOUR BODY GOES HERE";
//$headers = "MIME-Version: 1.0/r/nContent-Type: text/html; charset=UTF-8";
//$headers = "From: danemiller22@gmail.com/r/n

$headers = 	'From: '.$email_from."\r\n" .
			'Reply-To: '.$email_from."\r\n" .
			"Content-Type: text/html; charset=UTF-8\r\n" .
			'X-Mailer: PHP/' . phpversion();

$mail_success = mail($to, $subject, $body, $headers);

if ($mail_success == true) {
	echo "<p>Thank you for contacting us. We will be in touch with you very soon.</p>";
} else {
	echo "Email sending failed!";
}
*/
?>