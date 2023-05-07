<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title> menu </title>
	<script type="text/javascript"  src="https://kit.fontawesome.com/a076d05399.js">
		function log() {
          alter("log out successful"); 
          		}
	</script>

	<style type="text/css">
		body{
			font-family: 'Roboto',sans-serif;
		}
		*{
			margin: 0;
			padding: 0;
			list-style: none;
			text-decoration: none;
		}
		.sidebar{
			position: fixed;
			left: -250px;
			width: 250px;
			height: 100%;
			background:#042331; 
			transition: all .5s ease;
		}
		.sidebar header{
			font-size: 22px;
			color: white;
			text-align: center;
			line-height: 70px;
			background: #063146;
			user-select: none;
		}
		.sidebar ul a{
			display: block;
			height: 100%;
			width: 100%;
			line-height: 65px;
			font-size: 20px;
			color: white;
			padding-left: 40px;
			box-sizing: border-box;
			border-top: 1px solid rgba(255,255,255,.1);
			border-bottom: 1px solid black;
			transition: .4s;
		}
		ul li:hover a{
			padding-left: 50px;
		}
		.sidebar ul a i{
            margin-right: 16px;            
		}
		#check{
			display: none;
		}
		label #btn ,label #cancel{
			position: absolute;
			cursor: pointer;
			background: #042331;
			border-radius: 3px;
		}
		label #btn{
			left:40px;
			top: 25px;
			font-size: 35px;
			color: white;
			padding: 6px 12px;
			transition: all .5s;
		}
		label #cancel{
			z-index: 1111;
			left: -195px;
			top: 17px;
			font-size: 30px;
			color: #0a5275;
			padding: 4px 9px;
			transition: all .5s ease;
		}
		#check:checked ~ .sidebar{
			left: 0;
		}
		#check:checked ~ label #btn{
			left: 250px;
			opacity: 0;
			pointer-events: none;
		}
		#check:checked ~ label #cancel{
			left: 195px;
		}
		#check:checked ~ section{
			margin-left: 250px;
		}
		section{
			/*background: url();*/
			background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("ani/tiiback.jpg");
			height: 100vh;
			background-size: cover;
			background-position: center;
			transition: all .5s;
		}
		ul li ul li{
			display: none;
			/*background-color: #fff;*/
			box-shadow: rgba(0,0,0,0.2) 0 2px 6px 0;
			height: 60px;
		}
		ul li:hover ul li{
			display: block;

		}



			
	</style>		
</head>
<body>
	<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
			
		</label>
		<div class="sidebar">
		<header>My App</header>
		<ul>
			<li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
			<li><a href="#"><i class="fas fa-link"></i>Animal Details</a>
				<ul>
					<li><a href="add_animal_details.php ">Add Animals</a></li>
					<li><a href="manage_ani.php">Manage Details</a></li>
						
				</ul></li>
					
			<li><a href="managetype.php "><i class="fas fa-stream"></i>ManageTicket type </a></li>
			<li><a href="#"><i class="fas fa-stream"></i>Normal Ticket</a>
			    <ul>
					<li><a href="addnzt.php ">Add Ticket</a></li>
					<li><a href="ManageTicket.php">Manage Ticket</a></li>
				</ul></li></li>

			<li><a href="#"><i class="fas fa-stream"></i>Foreigner Ticket</a>
			    <ul>
					<li><a href="addnzt.php">Add Ticket</a></li>
					<li><a href="ManageTicket.php">Manage Ticket</a></li>
				</ul></li></li>

			<li><a href="#"><i class="fas fa-sliders-h"></i> Page</a>
				<ul>
					<li><a href="aboutus.php">About us</a></li>
					<li><a href="contactus.php">contact us</a></li>
				</ul></li>

			<li><a href="#"><i class="far fa-envelope"></i> Reports</a></li>
			<li><a href="#"><i class="fas fa-question-circle"></i>Search</a>
				<ul>
					<li><a href="#">Normal people search</a></li>
					<li><a href="#">foreign people search</a></li>
					
						
				</ul>

			</li>
             
			 <li><a href="#"><i class="fas fa-link"></i>Admin</a>
			    <ul>
					<li><a href="adminprofile.php">profile</a></li>
					<li><a href="adminsettings.php">settings</a></li>
					<li><a href="home.php" onclick="return log()">log out</a></li>
						
				</ul></li>

		</ul>
		
	</div>
	
	</div>
	<section>
		
	</section>

</body>
</html>