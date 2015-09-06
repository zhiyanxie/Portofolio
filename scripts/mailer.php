<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	date_default_timezone_set('Etc/UTC');
	require 'PHPMailerAutoload.php';
	//if (isset($_POST['foo']) && !empty($_POST['foo'])) { // Spam prevention
	//	exit;
	//}
	// Validation
	if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['email'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$mail = new PHPMailer;

    /**
   * This example shows settings to use when sending via Google's Gmail servers.
  */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "xiezhiyanhfut@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "2208227xie";

//Set who the message is to be sent from
$mail->setFrom('xiezhiyanhfut@gmail.com', 'zhiyan xie');

//Set an alternative reply-to address
$mail->addReplyTo('xiezhiyanhfut@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('xiezhiyanhfut@gmail.com', 'John Doe');

//Set the subject line

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Subject = 'Here is the subject';
$mail->Body    = "<strong>$name</strong><br/>$email<br/><br/>$message";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


//send the message, check for errors
if (!$mail->send()) {
	 $error="<br />Connection error";
   //echo "Mailer Error: " . $mail->ErrorInfo;
   echo "Connection error";
} else {
    $sucess="<br />Mesessage sent";
	//header("Location: index.php");
    echo "Message sent!";
   }

}else{
	
	$error="<br />Please enter the field correctly";}}
	
	
?>
