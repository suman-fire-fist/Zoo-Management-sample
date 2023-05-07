<?php

$con = mysqli_connect("localhost","root","","zoo");

if(isset($_POST['submit']))
{
  $ttype = mysqli_real_escape_string($con,$_POST['etype']);  
  $vname = mysqli_real_escape_string($con,$_POST['t1']);  
  $adult = mysqli_real_escape_string($con,$_POST['t2']); 
  $children = mysqli_real_escape_string($con,$_POST['t3']);
  $email = mysqli_real_escape_string($con,$_POST['t4']);
  $phoneno = mysqli_real_escape_string($con,$_POST['t5']);
  

  
  $sql_insert = "insert into addticket(ticket_type,vname,adult,children,email,phoneno) values ('$ttype','$vname','$adult','$children','$email','$phoneno')" ; 


  if(mysqli_query($con,$sql_insert))
{
	echo " data successfully inserted ";
}


}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Book Now</title>
</head>
<body>	
		<form action="booknow.php" method="POST">
	<h1><center>Book Now</center></h1>
	<label>Ticket Type:</label>
  <select name="etype">
    <option value="Ticket Type">Select</option>
    <option value="adult">Adult</option>
    <option value="Children">Children</option>
    <option value="Foreign Adult"> Foreign Adult</option>
    <option value="Foreign Children"> Foreign Children</option>
  </select> <br><br>
	
	<label>Visitor Name:</label>
	<input type="text" name="t1" placeholder="Visitor name"><br><br>
	<label>Adult:</label>
    <input type="text" name="t2" placeholder="No.of Adult"><br><br>
    <label>children</label>
    <input type="text" name="t3" placeholder="No.of children"><br><br>
    <label>Email id:</label>
    <input type="text" name="t4" placeholder="Email"><br><br>
    <label>Number:</label>
    <input type="text" name="t5" placeholder="phone Number"><br><br>

    <input type="submit" name="submit" value="submit">

</form>
	

</body>
</html>