<!DOCTYPE html>
<html>
<head>
	<title>viewing data</title>
</head>
<body>
<table border="4" width="1000" align="center">
	<tr>
		<td colspan="20" align="center" bgcolor="orange"><h1>manage animal details</h1></td>
	</tr>

			<th>sno</th>
			<th>Animal name</th>
			<th>breed</th>
			<th>Creation date</th>
			<th>Action</th>

<tr>
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("zoo",$conn);
$que = "select * from add_ani";
$run = mysql_query($que);

 while($row = mysql_fetch_array($run))
 {
 	$sno = $row[0];
    $name =$row[1];
    $breed = $row[4];
    $creation = $row[5];

 ?>

 <td> <?php echo $sno; ?></td>
 <td> <?php echo $name;?></td>
 <td> <?php echo $breed; ?></td>
 <td> <?php echo $creation; ?></td>
   <td>
   	<button><a href="update_details.php">edit</a></button>
   	<button><a href="delete1.php?del=<?php echo $sno?>">delete</a></button>
   </td>

   </tr>
<?php }


?>





</table>
</body>
</html>
