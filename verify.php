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

?>