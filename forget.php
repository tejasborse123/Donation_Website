<?php

	$conn = mysqli_connect("localhost", "root", "","savelife") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			//echo "connection successfull <br>";
		}

	$email = $_POST['email'];

	$_SESSION['email'] = $email;

	$code = rand(100000,999999);

	session_start();
	$_SESSION['email']=$email;
	$_SESSION['code']=$code;

	$headers = "From: savelifes07@gmail.com";
	$subject = "verify otp";
	$message = "Here is your OTP to Create new Passwor for save life foundation, $code ";
	if(mail($email, $subject, $message, $headers))
	{
		include 'newPass.html';
	}
	else
	{
		echo "Email send failed";
	}


		

?>