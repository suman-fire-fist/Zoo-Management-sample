<!DOCTYPE html>
<html>
<head>
	<title>Animals</title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body
		{
			margin: 0;
			background: gray;

		}
		nav
		{
			background: #594848;
			width: 100%;
			overflow: auto;
		}
		ul
		{
			margin: 0;
			padding: 0;
			list-style: none;
		}
		li
		{
			float: left;

		}
		nav a
		{
			width: 120px;
			display: block;
			text-decoration: none;
			text-align: center;
			background-color: #594848;
			font-size: 17px;
			color: white;
			padding:20px 10px;
			font-family: arial;
		}
		nav a:hover
		{
			background:skyblue;
			color: black;
		}
		.container
		{
			max-width:1200px;
			margin: auto;
			background: #f2f2f2;
			overflow: auto; 
			display: grid; /*change*/
			grid-template-columns: repeat(4,1fr);
			grid-gap: 20px;
		}
		.gallery
		{
			position: relative;
			margin:5px;
			border: 1px solid #ccc;
           	float: left;
           	width: 390px;
		}
		.gallery img
		{
			width: 100%;
			height: auto;
		}
		.desc
		{
			padding: 15px;
			text-align: center;
		}
		</style>
</head>
<body><h1><center> Animals</center></h1>
		<div class="container">
	    <div class="gallery">
		 <img src="ani\monkey.jpg">
		 <div class="desc"><h2><a href="Monkey.html">Monkey</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\lions.jpg">
		 <div class="desc"><h2><a href="Lion.html">Lion</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\elephant.jpg">
		 <div class="desc"><h2><a href="elephant.html">elephant</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\s.jpg">
		 <div class="desc"><h2><a href="s.html">s</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\dear.jpg">
		 <div class="desc"><h2><a href="Dear.html">Dear</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\tiger.jpg">
		 <div class="desc"><h2><a href="Tiger.html">Tiger</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\bad.jpg">
		 <div class="desc"><h2><a href="Badass.html">Badass</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\tor.jpg">
		 <div class="desc"><h2><a href="Tortoise.html">Tortoise</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\fox.jpg">
		 <div class="desc"><h2><a href="Fox.html">Fox</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\hippo.jpg">
		 <div class="desc"><h2><a href="Hippo.html">Hippo</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\p.jpg" >
		 <div class="desc"><h2><a href="Red Panda.html">Red Panda</a></h2></div>
		</div>
		<div class="gallery">
		 <img src="ani\panda.jpg">
		 <div class="desc"><h2><a href="Panda.html">Panda</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\zibra.jpg">
		 <div class="desc"><h2><a href="Zibra.html">Zibra</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\chameleon.jpg">
		 <div class="desc"><h2><a href="Chameleon.html">Chameleon</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\peak.jpg">
		 <div class="desc"><h2><a href="Peacock.html">Peacock</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\coala.jpg">
		 <div class="desc"><h2><a href="Coala.html">Coala</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\Gorilla.jpg">
		 <div class="desc"><h2><a href="Gorilla.html">Gorilla</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\snakes.jpg">
		 <div class="desc"><h2><a href="Snakes.html">Snakes</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\parrots.jpg">
		 <div class="desc"><h2><a href="Parrots.html">Parrots</a></h2></div>
	    </div>
	    <div class="gallery">
		 <img src="ani\swan.jpg">
		 <div class="desc"><h2><a href="Swans.html">Swans</a></h2></div>
	    </div>

     </div>
</body>
</html>