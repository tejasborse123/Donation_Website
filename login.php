<?php

	$conn = mysqli_connect("localhost", "root", "","savelife") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			//echo "connection successfull <br>";
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM `usersinfo` WHERE `Email` LIKE '$username' AND `Password` LIKE '$password'";

		$result = mysqli_query($conn,$query) or die(mysqli_error());

		$count = mysqli_num_rows($result);

		if ($count>0) {
			echo "Login Successfull";

			session_start();
			$LoggedIn = true;
			$_SESSION['Loggedin']=$LoggedIn;
		}

		else{
			$label = " X---Login Failed---X";
			session_start();
			$_SESSION['label']=$label;
			include 'entry.html';
		}
	
?>