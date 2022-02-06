<?php

session_start();

$chktemp = $_SESSION['code'];
$otp = $_POST['otp'];
$birthday = $_SESSION['birthday'];

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
			 
		$sql = "INSERT INTO `usersinfo` (`Sr.no`, `Full Name`, `Email`, `Phone Number`, `Username`, `Password`, `Birthday`) VALUES ('', '$fullname' , '$email' , '', '$username', '$password', '$birthday')";

		$result = mysqli_query($conn,$sql) or die(mysqli_error());
			
		if($result) {
					echo "<br>Form Submitted Successfully";
			}
			else{
					echo "<br>Form not Submitted because : ". mysqli_error($conn);
			}

?>