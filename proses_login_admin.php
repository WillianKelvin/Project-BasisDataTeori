<?php
$email = $_POST['email'];
$password = $_POST['password'];
	
	if ($email== 'admin@gmail.com') {
		if ($password=='12345') {
		}
	}
	header('location: tambah.php');
?>