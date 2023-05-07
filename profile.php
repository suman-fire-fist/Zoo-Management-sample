<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("zoo",$conn);
$que = "select * from addticket";
$run = mysql_query($que);

 while($row = mysql_fetch_array($run))
 {
 	
    $adult = $row[3];
    $child = $row[4];
    $ac= $row[7];
    $cc = $row[8];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
	<h2>ticket id:</h2>
	<h2>visiting date</h2>
	<h2>visitor name</h2>

	<table border="2" width="1000">
		<th>#</th>
		<th>No of tickets</th>
		<th>price per unit</th>
		<th>Total</th>

		<tr>
			<td>Number of Adult</td>
            <td><?php echo $adult ;?></td>
            <td><?php echo $ac ;?></td>
            <td></td>
		</tr>
		<tr>
			<td>Number of children</td>
			<td><?php echo $child ;?></td>
			<td><?php echo $cc ;?></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" align="center">Total Ticket Price</td>
			<td></td>
		</tr>
		<tr>
	</tr>

<?php } ?>

</table>

</body>
</html>
