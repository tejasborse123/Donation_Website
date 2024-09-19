<?php

	$rateus = $_POST['star-count'];

    $conn = mysqli_connect("localhost", "root", "","savelife") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			//echo "connection successfull <br>";
		}

	$query = "INSERT INTO `rateus` (`Ratting`) VALUES ('$rateus')";

	$result = mysqli_query($conn,$query) or die(mysqli_error());

	if($result) {
					echo "<br>Form Submitted Successfully<br>";
			}
			else{
					echo "<br>Form not Submitted because : ". mysqli_error($conn);
			}

?>