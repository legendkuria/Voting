<?php
	session_start();
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'voting');
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$regNo=$_POST['regNo'];
	$president=$_POST['president'];

    
   

	$s ="select * from voted where regNo = '$regNo'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {
echo "you have already votted";
	}
	else{
		$register = "insert into voted(fname, lname,regNo,president) values ('$fname','$lname','$regNo','$president')";
		mysqli_query($con, $register);
		echo "you have votted successfully";
	}

?>	