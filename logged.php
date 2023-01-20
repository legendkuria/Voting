<?php
	session_start();
	header('location:index.php');
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'voting');
   $regNo=$_POST['regNo'];
$name =$_POST['name'];
	$username =$_POST['username'];
	
	$password =$_POST['password'];
	
	$s ="select * from voter where username = '$username'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {
		echo "username already exists";
	}
	else{
		$register = "insert into voter(regNo,name, username,password) values ('$regNo','$name','$username','$password')";
		mysqli_query($con, $register);
		echo "Account created";
	}

?>