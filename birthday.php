<?php
	include 'birthday.html';
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	session_start();
	$_SESSION['email']=$email;
	$_SESSION['fullname']=$fullname;
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
?>