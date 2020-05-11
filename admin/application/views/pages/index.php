<?php
require 'PHPMailer/PHPMailerAutoload.php';
date_default_timezone_set('Asia/Kolkata');
$date_time = date("F d, Y h:i:s A") ;
$date_time_12 = date("d-m-Y h:i:s A") ;
$date = date('d-m-Y H:i');
$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.notageeks.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'bulkstudy@notageeks.com';                 // SMTP username
$mail->Password = 'mohit@notageeks';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->setFrom('bulkstudy@notageeks.com', 'Bulk Study');
$mail->addAddress('mohitchack255@gmail.com', 'Mohit25');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('mohitchack255@gmail.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject on '.$date_time_12;
$mail->Body    = 'This is the New HTML Mail <b>Test</b>'.$date;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'.$date_time;

if(!$mail->send()) {
    echo 'Message could not be sent on '.$date;
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent on '.$date;
}
?>