<?php
session_start();
$connect = mysqli_connect('localhost','root','','sepatu_online');
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT *FROM pembeli WHERE email='$email'");
$row= mysqli_fetch_object ($query);

	if ($row->email==$email){
		if($row->password==$password){
			$_SESSION['id_pembeli']=$row->id_pembeli;
			header('location: home.php');
		}
	}
?>