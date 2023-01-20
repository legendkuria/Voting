
<?php
session_start();
  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'voting');
  $s ="select * from voted where president = 'john'";
  $result = mysqli_query($con, $s);
  $john = mysqli_num_rows($result);
  $s ="select * from voted where president = 'sam'";
  $result = mysqli_query($con, $s);
  $sam = mysqli_num_rows($result);
  $s ="select * from voted where president = 'eliud'";
  $result = mysqli_query($con, $s);
  $eliud = mysqli_num_rows($result);
  $s ="select * from voted where president = 'kevin'";
  $result = mysqli_query($con, $s);
  $kevin = mysqli_num_rows($result);

?>
