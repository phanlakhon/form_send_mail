<?php
    date_default_timezone_set('Asia/Bangkok');
    require_once('PHPMailer/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = ""; // sets the prefix to the servier
    $mail->CharSet = 'UTF-8';

	$mail->Host = "smtp.mailtrap.io"; 
	$mail->Port = 25; 
	$mail->Username = "4dc77b62920f56";
	$mail->Password = "d58d976e88d4fc"; 
    
	$mail->From = $_POST['email']; 
	$mail->FromName = $_POST['name'];  // set from Name
    $mail->Subject = "Contact Form."; 
    
    $mail->Body = "Company Name : ".$_POST['company_name']."<br/>";
    $mail->Body .= "Phone : ".$_POST['phone']."<br/>";
    $mail->Body .= "Convenient Time : ".$_POST['convenient_time']."<br/>";
    $mail->Body .= "Requirements : ".$_POST['requirements'];

	$mail->AddAddress("hello@hotmail.com", "Mr.Html"); // to Address

	$mail->Send(); 
?>