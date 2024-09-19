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

      	if ($password == $cpassword) {

      		$query = "UPDATE `usersinfo` SET `Password`='$password' WHERE 'email'='$email'";
      	
			$result = mysqli_query($conn,$query) or die(mysqli_error());

			$labels =  "Password Changed successfully.. <br>Go Back to LOGIN page";;
			$_SESSION['labels']=$labels;
			include 'recreatePass.html';
		}
		else{
			$labels =   "Password Not Changed.. <br>Please make sure that both passwords match";
			$_SESSION['labels']=$labels;
			include 'recreatePass.html';
		}
?>