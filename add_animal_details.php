<?php
$con = mysqli_connect("localhost","root","","zoo");

if(isset($_POST['submit']))
{
  $animalname = mysqli_real_escape_string($con,$_POST['ani']);  
  $plot_no = mysqli_real_escape_string($con,$_POST['l3']); 
  $feed_no = mysqli_real_escape_string($con,$_POST['l4']); 
  $breed = mysqli_real_escape_string($con,$_POST['breed']);
  $cre =  mysqli_real_escape_string($con,$_POST['cre']);
  $des = mysqli_real_escape_string($con,$_POST['l6']);


  $sql_insert = " insert into add_ani(animal_name,plot_no,feed_no,breed,description,creationdate) values ('
  $animalname','$plot_no','$feed_no','$breed','$des','$cre') " ; 


  if(mysqli_query($con,$sql_insert))
{
	echo " data successfully inserted";
}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animal Details</title>	
</head>
<body>
	<form action="add_animal_details.php", method="POST">
	<h1>Add Animal Details</h1>
	<label>Animal Name:</label></tr>
	<input type="text" name="ani"><br><br>

	<label>Animal Image:</label>
	<input type="file" name="l2"><input type="submit" name="submit" value="upload"><br><br>

	<label>plot number:</label>
	<input type="text" name="l3"><br><br>

	<label>Feed Number:</label>
	<input type="text" name="l4"><br><br>

	<label>Breed:</label>
	<input type="text" name="breed"><br><br>
<label>creation date:</label>
	<input type="date" name="cre"><br><br>



	<label>Description:</label>
	<input type="text" name="l6"><br><br>
	<input type="submit" name="submit" >
</form>
</body>
</html>