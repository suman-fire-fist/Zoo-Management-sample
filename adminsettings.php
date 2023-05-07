<!DOCTYPE html>
<html>
<head>
	<title>settings</title>
	<script type="text/javascript">
		function change()
		{
			alert("changed");
		}
	</script>
</head>
<body>
	<h1>Change Password:</h1>
	<form>
	
	<input type="Password" name="psd" placeholder="current password"><br><br>
	<input type="password" name="psd1" placeholder="New password"><br><br>
	<input type="password" name="psd2" placeholder="conform password"><br><br>
	<input type="submit" name="s" value="change" onclick="return change()">

</form>
</body>
</html>