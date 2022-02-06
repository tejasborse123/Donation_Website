<?php

  $code = rand(100000,999999);
  session_start();
  
  $_SESSION['code'] = $code;
  $email = $_SESSION['email'];
  $fullname = $_SESSION['fullname'];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];


	$headers = "From: savelifes07@gmail.com";
	$subject = "verify otp";
	$message = " Hey $fullname here is your OTP for save life foundation, $code ";
	if(mail($email, $subject, $message, $headers))
	{
		include 'otp.html';
	}
	else
	{
		echo "Email send failed";
	}

?>