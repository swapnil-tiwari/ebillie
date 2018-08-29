<?php
require("../PHPMailer_5.2.0/PHPMailer_5.2.0/class.phpmailer.php");
require("../PHPMailer_5.2.0/PHPMailer_5.2.0/class.smtp.php");
$email=$_SESSION['cus_email'];
echo $email;
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug=2;                                     
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Port= 465 ;
$mail->SMTPSecure='ssl';
$mail->Username = "codenova486@gmail.com";  // SMTP username
$mail->Password = "nova_rise"; // SMTP password
$mail->From = "codenova486@gmail.com";
$mail->FromName = "Developers Community";
$mail->AddAddress($email);                  // name is optional
$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = "Welcome!";
$mail->Body="<html><body>
<p>Cogratulations! <br> As now you are a part of <b>Developers Community</b>, we would like to contact you soon.<br> For further information, contact to <a>8009934535</a></p>
</body></html>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}else{
	echo "message has been sent";
}
?>
