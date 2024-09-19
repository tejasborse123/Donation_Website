<?php

session_start();

$chktemp = $_SESSION['code'];
$otp = $_POST['otp'];

if ($chktemp == $otp) 
{
   //echo	"<br>Verified succesfully<br>";
	include 'recreatePass.html';
}
else
{
	include 'newPass.html';
}

?>