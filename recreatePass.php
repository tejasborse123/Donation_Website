<?php

$conn = mysqli_connect("localhost", "root", "","savelife") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			//echo "connection successfull <br>";
		}

		$password = $_POST['password'];
      	$cpassword = $_POST['cpassword'];

      	session_start();
        $email = $_SESSION['email'];

      	if ($password != $cpassword) {
      		include 'recreatePass.html';
      	}

	$query = "UPDATE `usersinfo` SET `Password`='$password' WHERE 'email'='$email'";

	$result = mysqli_query($conn,$query) or die(mysqli_error());

	if($result){
					$label = "Password Changed successfully.. Go Back to LOGIN page";
					$_SESSION['labels']=$labels;
					header("Location: test.html");
			}
	else{
					$labels =  "Please make sure that both passwords match";
					$_SESSION['label']=$labels;
					header("Location: test.html");
			}
		



?>