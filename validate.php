<?php
	session_start();
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'voting');
	$regNo=$_POST['regNo'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$name =$_POST['name'];
	$s ="select * from voter where username = '$username' && password = '$password'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	$_SESSION['username']= $username;
	if ($num ==1) {

		header('location:voter.php');
	}
	else{
		header('location:index.php');
	}

?>	