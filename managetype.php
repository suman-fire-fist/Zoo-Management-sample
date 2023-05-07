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
			<th>Price</th>
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
    $cost = $row[7];

 ?>

 <td> <?php echo $sno; ?></td>
  <td> <?php echo $tt; ?></td>
 <td> <?php echo $cost ; ?></td>


   <td>
   	<button ><a href="update_TT.php" id="b1">edit</a></button>
   	<!--<button><a href="#" id="b2">delete</a></button>-->
   </td>

   </tr>
<?php }


?>





</table>
</body>
</html>





























