<!DOCTYPE html>
<html>
<head>
	<title>viewing ticket details</title>
</head>
<body>
<table border="4" width="1000" align="center">
	<tr>
		<td colspan="20" align="center" bgcolor="orange"><h1>manage ticket details</h1></td>
	</tr>

			<th>s.no</th>
			<th>Ticket Type</th>
			<th>visitor name</th>
			<th>No.of adults</th>
			<th>No.of childern</th>
			<th>Email</th>
			<th>phone number</th>
			<th>cost</th>

			<th>Action</th>
<tr>
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("zoo",$conn);
$que = "select * from addticket";
$run = mysql_query($que);

 while($row = mysql_fetch_array($run))
 {
 	$sno = $row[0];
 	$tt = $row[1];
    $name =$row[2];
    $adult = $row[3];
    $child = $row[4];
    $mail = $row[5];
    $phone  = $row[6];
    $cost = $row[7];

 ?>

 <td> <?php echo $sno; ?></td>
 <td> <?php echo $tt; ?></td>
 <td> <?php echo $name;?></td>
 <td> <?php echo $adult; ?></td>
 <td> <?php echo $child; ?></td>
 <td> <?php echo $mail; ?></td>
 <td> <?php echo $phone ; ?></td>
  <td> <?php echo $cost ; ?></td>

   <td>
   	<button ><a href="update_TT.php?edit=<?php echo $sno;?>" id="b1">edit</a></button>
   	<button><a href="delete2.php?del=<?php echo $sno?>" id="b2">delete</a></button>
   </td>

   </tr>
<?php }


?>





</table>
</body>
</html>
