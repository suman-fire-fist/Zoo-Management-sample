<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<style type="text/css">
		*
		{
			margin: 0;
			padding: 0;
			font-family:Arial;
		}
		header
		{
			background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("lion.jpg");
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		ul
		{
			float: right;
			list-style-type: none;
			margin-top: 25px;
		}
		ul li
		{
			display: inline-block;
		}
		ul li a
		{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid transparent;
			transition: 0.6s ease;
		}
		ul li a:hover{
			background-color: #fff;
			color: #000;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		.logo img{
			float: left;
			width: 150px;
			height: auto;
			opacity: 0.6;
		}
		.main{
			max-width: 1200px;
			margin: auto;
		}
		.title{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.title h1
		{
			color: #fff;
			font-size: 70px;
		}
		.button{
			position: absolute;
			top: 62%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.btn
		{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
			transition:0.6s ease;
		}
		.btn:hover{
			background-color: #fff;
			color: #000;
		}
	</style>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="o.jpg">
			</div>
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="aboutus.php">About</a></li>
				<li><a href="contactus.php">Contact</a></li>
				<li><a href="animals.html">Animals</a></li>
				<li><a href="admin.php">Admin</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>home page</h1>
		</div>
		<div class="button">
			<a href="booknow.php " class="btn">Book Now</a>
			<a href="#" class="btn">Learn More</a>

		</div>
	</header>

</body>
</html>