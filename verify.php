<?php

session_start();

$chktemp = $_SESSION['code'];
$otp = $_POST['otp'];

if ($chktemp == $otp) 
{
   echo	"Verified succesfully";
}
else
{
	include 'otp.html';
}

$conn = mysqli_connect("localhost", "root", "","savelife");
		
	$email = $_SESSION['email'];
	$fullname = $_SESSION['fullname'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

		if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			echo "connection successfull";
			}
			 
		$sql = "INSERT INTO `users` (`email`, `fullname`, `username`, `password`) VALUES ('$email' , '$fullname' , '$username' , '$password')";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
			
		if($result) {
					echo "<br>Form Submitted Successfully";
			}
			else{
					echo "<br>Form not Submitted because : ". mysqli_error($conn);
			}

?>