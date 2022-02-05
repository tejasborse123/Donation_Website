<?php


   $email = $_POST['email'];
   $fullname = $_POST['fullname'];
   $username = $_POST['username'];
	$password = $_POST['password'];

   $code = rand(100000,999999);
   
   session_start();
   $_SESSION['code'] = $code;
   $_SESSION['email']= $email;

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