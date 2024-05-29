<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendEmail($to, $subject, $message, $fromName, $fromEmail) {

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rhaemanager@gmail.com';  
        $mail->Password   = 'tkpbwkkerhwdhdec';       
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);               
        $mail->addReplyTo($fromEmail, $fromName);
        
        $mail->isHTML(true);                  
        $mail->Subject = $subject;
        $mail->Body    = $message;

       
        $mail->send();
        echo "<script>
                alert('Message was sent successfully!');
                document.location.href = '../../MainFiles/HomePage/index.php';
              </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


if (isset($_POST["send"])) {
    $to = 'rhaemanager@gmail.com'; 
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $fromName = $_POST["name"];
    $fromEmail = $_POST["email"];

    sendEmail($to, $subject, $message, $fromName, $fromEmail);
}

?>
