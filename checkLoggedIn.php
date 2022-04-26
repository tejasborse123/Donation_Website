<?php 
        echo "hello";


	$conn = mysqli_connect("localhost", "root", "","savelife") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			echo "connection successfull <br>";
		}


	session_start();

	if( $_SESSION['Loggedin'] == $LoggedIn ){
		echo "True";
	}
	else{
		echo "false";
	}
?> 