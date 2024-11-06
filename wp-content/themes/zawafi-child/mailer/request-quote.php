<?php

$url =  $_SERVER['SERVER_NAME']; // Variable for URL to conditionaly loading mail configs

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
if($url == "localhost"){
// Comment following 'Server Settings' to work without SMTP credentials. Note: It will only work in Production    
//Server settings
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;            // Enable verbose debug output
    $mail->isSMTP();                                    // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';               // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                           // Enable SMTP authentication
    $mail->Username   = 'renjithnks@gmail.com';         // SMTP username
    $mail->Password   = 'MyGmailPsW)(*';                // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                            // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
				
				//Recipients
    $mail->setFrom('mail@mgmgraphics.us', 'MGM Graphics');
    $mail->addAddress('mail@igments.com', 'Igments'); // Add a recipient
    //$mail->addAddress('ellen@example.com');                // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
}
else {
				//Recipients
    $mail->setFrom('mail@mgmgraphics.us', 'MGM Graphics');
    $mail->addAddress('mail@igments.com', 'Igments'); // Add a recipient
    //$mail->addAddress('ellen@example.com');                // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
}




// Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    
// Fields in the form
$email 						= $_POST['email']; 
$phonenumber = $_POST['phonenumber']; 
$message 				= $_POST['message']; 
    
	
$mail->Subject = 'Request Quote'; 
$mail->Body    = 
"<html> 
<body>
<h3 style='margin-bottom:20px;'>Hello Administrator, You have an enquiry from your Website. Details is follows:</h3>
<table cellspacing='0' cellpadding='0'>
<tr>
<td style='background-color:#f5f5f5;padding:5px;width:150px;border:1px solid #cecece;'>E-mail</td>
<td style='background-color:#f5f5f5;padding:5px;width:350px;border:1px solid #cecece;'>$email</td>
</tr>
<tr>
<td style='background-color:#f5f5f5;padding:5px;width:150px;border:1px solid #cecece;'>Phone Number</td>
<td style='background-color:#f5f5f5;padding:5px;width:350px;border:1px solid #cecece;'>$phonenumber</td>
</tr>
<tr>
<td style='background-color:#f5f5f5;padding:5px;width:150px;border:1px solid #cecece;'>Message</td>
<td style='background-color:#f5f5f5;padding:5px;width:350px;border:1px solid #cecece;'>$message</td>
</tr>

</table>
	</body>
	</html>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>