<?php 

ini_set('display_errors', 1);

/*
echo "<strong>PHP POST:</strong>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

/*
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
*/

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

<?php
// https://stackoverflow.com/questions/9802788/call-a-rest-api-in-php
// https://www.weichieprojects.com/blog/curl-api-calls-with-php

// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

function callAPI($method, $url, $data){
   $curl = curl_init();

   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Authorization: Bearer OyGkvh_Gpibkl4QLhOJptTC3',
	  'Accept: application/json',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

echo callAPI('POST', 'https://photoslibrary.googleapis.com/v1/mediaItems:search', '{ "albumId": "ABxfWhHnu1c-l5Pr9QbIBRgAgdLpNfCEGAd7WSQN2OHljoavBwyJmQpN49Vu2seWNKjGm9pYDSHx" }');

?>