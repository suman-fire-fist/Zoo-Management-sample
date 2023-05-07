<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("zoo",$conn);
 
 $delete_record = $_GET['del'];

 $query = "delete from add_ani where no = '$delete_record' ";

 if(mysql_query($query))
 {
 echo "<script>window.open('manage_ani.php?deleted=record has been deleted','_self')              </script>" ;
 }






?>