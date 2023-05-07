<?php
$con = mysqli_connect("localhost","root","","zoo");

if(isset($_POST['login']))
{
  $user = mysqli_real_escape_string($con,$_POST['user']);  
  $pwd = mysqli_real_escape_string($con,$_POST['pwd']); 
  
  
  $sql_insert = "insert into adminlogin(username,password) values ('$user','$pwd')" ; 


  if(mysqli_query($con,$sql_insert))
{
	echo " data successfully inserted ";
}


}








?>









<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			font-family: sans-serif;

		}
		body{
			/*background: url("ani/tiiback.jpg") no-repeat;
			background-size: cover;*/
			background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("ani/tiiback.jpg");
			height: 100vh;
			background-size: cover;
			background-position: center;

		}
		.login-form{
			width:350px;
			top:50%;
			left: 50%;
			transform:translate(-50%,-50%);
			position: absolute;
			color: #fff;
		}
		.login-form h1{
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			margin: 40px 0;
		}
		.login-form p{
			font-size: 20px;
			margin: 15px 0;
		}
		.login-form input{
			font-size: 16px;
			width: 100%;
			padding: 15px 10px;
			border: 0;
			outline: none;
			border-radius: 5px;
		}
		.login-form button{
			font-size: 18px;
			font-weight: bold;
			margin: 20px 0;
			padding: 10px 15px;
			width: 50%;
			border-radius: 5px;
			border:0;

		}
		form a{
			text-decoration: none;
			font-size: 18px;
			color: white;
			padding: 0 0 0 20px;
		}
		form i{
			position: absolute;
			font-size: 25px;
			color: grey;
			margin: 15px 0 0 -45px;
		}
	    i.fa-lock{
			margin-top:auto;
		}
	</style>
	<script type="text/javascript">
		function myName()
		 {
			var a=document.getElementById("username").value;
			var b=/^[A-Za-z]+$/;

			if(a=="")
			{
				document.getElementById("msg").innerHTML="</h2>please enter your name</h2>";
				return false;
			}
			if(a.length<3)
			{
				document.getElementById("msg").innerHTML="<h3>min length(3) need to be entered</h3>";
				return false;
			}
			if (a.length>25) 
			{
				document.getElementById("msg").innerHTML="<h2>name should not exceed 25 char</h2>";
			    return false;
			}
			if(a.match(b))
				true;
			else
			{
				document.getElementById("msg").innerHTML="<h2>enter only alphabets please</h2>";
				return false;
			}

		}
		function myPwd()
		  {
		  	var c=document.getElementById("p1").value;
		  	if(c==" ")
		  	{
		  	document.getElementById("msg1").innerHTML="enter your password please";
		  		return false;
		  	}
		  	
			
		}
	</script>
</head>
<body>
	<div class="login-form">
		<h1>Admin Login </h1>
		<form action="index.php" method="post" > 
			<p>User Name:</p>
		  <input type="text" id="username" name="user" placeholder=" Enter User Name">
			<span style="color:white" id="msg"></span><br>

			<p>Password:</p>
  		  <input type="Password" id="p1" name="pwd" placeholder="Enter Password">
  		  <i class="fas fa-lock"></i>
          <span  style="color: white" id="msg1"></span>
			

		  <button  type="submit"  onclick="return myName()" onclick="return myPwd()" name="login">login</button>
		  <a href="#">Forget Password?</a>
		</form>
	</div>
</body>
</html>