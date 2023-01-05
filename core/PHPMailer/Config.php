<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'ssl://mail.mmiti.tech';
$mail->SMTPAuth = true;
$mail->Username = 'noreply@mmiti.tech';
$mail->Password = 'tp1Cs(HXT{P$';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;