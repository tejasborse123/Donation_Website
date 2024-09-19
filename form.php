<?php

	$food = $_POST['name'];
	$fExpDate = $_POST['phone'];
	$fQuantity = $_POST['email'];


	$conn = mysqli_connect("localhost", "root", "","savelife");
			

			if(!$conn){
				die("Sorry Failed to connect : ". mysqli_connect_error());
			}
			else{
				//echo "<br>connection successfull<br>";
				}
				 
			$sql = "INSERT INTO `usersinfo` (`Sr.no`, `Full Name`, `Email`, `Phone Number`, `Username`, `Password`, `Birthday`) VALUES ('', '$fullname' , '$email' , '', '$username', '$password', '$birthday')";

			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				
			if($result) {
						//echo "<br>Form Submitted Successfully<br>";
                        
				}
				else{
						echo "<br>Form not Submitted because : ". mysqli_error($conn);
				}
	
?>