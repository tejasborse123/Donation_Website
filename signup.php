<?php

   include 'otp.html';

   $email = $_POST['email'];
   $fullname = $_POST['fullname'];
   $username = $_POST['username'];
	$password = $_POST['password'];

   $code = rand(100000,999999);
   
   session_start();
   $_SESSION['code'] = $code;
	
	$headers = "From: savelifes07@gmail.com";
	$subject = "verify otp";
	$message = " Hey $fullname here is your OTP for save life foundation, $code ";
	if(mail($email, $subject, $message, $headers))
	{
		echo "Emai succesfully send to $email ";
	}
	else
	{
		echo "Email send failed";
	}

?>