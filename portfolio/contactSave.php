<?php
    include "PHPMailer.php"; 
    include "SMTP.php";
    $contactFrom = $_POST['contactFrom'];
    $contactTo = $_POST['contactTo'];
    $contactSubject = $_POST['contactSubject'];
    $contactContent = $_POST['contactContent'];
    $mail = new PHPMailer();
    $mail->isSMTP();
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.naver.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8'; 
    $mail->Username = 'lsrljm8011';
    $mail->Password = 'tpfls1998';
    $mail->setFrom('lsrljm8011@naver.com', 'PHP Class');
    $mail->addReplyTo($contactFrom, '안녕하세요!');
    $mail->addAddress('lsrljm98@gmail.com', 'John Doe');
    $mail->Subject = $contactSubject;
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    $mail->msgHTML($contactContent);
    $mail->AltBody = $contactContent;
    //$mail->addAttachment('../assets/img/post01.jpg');
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
?>
<script>
    location.href = "index.html";
</script>