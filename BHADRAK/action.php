<?php

$mailto=$email;

$mailsubject="OTP";

$mailmsg='<h1>YOUR OTP =</h1>'.$otp.'<br><h1>YOUR PASSWORD =</h1>'.$pwd ;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
   //Server settings
 $mail->SMTPDebug = 2;                                 // Enable verbose debug output
 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'soumya9778465@gmail.com';                 // SMTP username
 $mail->Password = 'bhubaneswar';                           // SMTP password
 $mail->SMTPSecure = 'tls'; //or ssl                           // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;   // or 465                                 // TCP port to connect to

//Recipients
 $mail->setFrom('soumya9778465@gmail.com', 'R Soumya');
$mail->addAddress($mailto);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//Content
 $mail->isHTML(true);                                  // Set email format to HTML
 $mail->Subject = $mailsubject;
 $mail->Body    = $mailmsg;

if(!$mail->send())
{
	echo"mail not send";
}
else {
	
	header("location:otp.php");
}
 ?>









