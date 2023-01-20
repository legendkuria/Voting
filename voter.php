<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="voting.css">
  <title>university student voting management system </title></head>
 <body>
  <form action="vot.php" method="post"></br>
   <a href="index.php">GO_HOME</a>
  <fieldset class="voted"><legend>voting system</legend>
        <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" />
    <br />
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" />
    <br>
    <label for="regNo">RegNo</label>
     <input type="text" name="regNo" id="regNo" />
<br>
<label>department</label>
<select name="department" id="department">
      <option >information technology</option>
      <option>computer science</option>
      <option >finance and accounting</option>
      <option>mechanical engineering</option>
      <option>electrical engineering</option>
      <option value="nursing" selected="selected">nursing</option>
    </select>
   <br>
   <label>president</label>
     <label >john
      <input type="radio" name="president" value="john"></label>
      
     <label >sam
      <input type="radio" name="president" value="sam"></label>
      
       <label >eliud
      <input type="radio" name="president" value="eliud"></label>
    
       <label >kevin
      <input type="radio" name="president" value="kevin"></label>
  
  </fieldset>
  <p>
 <input type="submit" name="submit" value="Vote" />
   <input type="reset" value="Clear"/>

  </p>
 
</form>
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
<form action="" method="post">
<h3> Results</h3>
<label>John<input readonly="readonly" type="number" name="votes" value="<?php echo $john ?>"></label>
<label>Sam<input readonly="readonly"type="number" name="votes" value="<?php echo $sam?>"></label>
<label>Eliud<input readonly="readonly"type="number" name="votes" value="<?php echo $eliud?>"></label>
<label>Kevin<input readonly="readonly"type="number" name="votes" value="<?php echo $kevin?>"></label>
<button type="submit">Tally</button>
</form>

</body>
</html>