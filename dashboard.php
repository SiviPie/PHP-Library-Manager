<?php


session_start();

if(!isset($_SESSION['useruid'])){
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styledash.css">

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>



<div id="mySidebar" class="sidebar">
		
		<div class="menu">
			
		
 
			
			<button onclick="changeSrc('welcome.php')">Acasă</button>
			
			<button onclick="changeSrc('profile.php')">Profil</button>
			
			<button onclick="changeSrc('biblioteca.php')">Bibliotecă</button>
			
			<button onclick="changeSrc('searchbook.php')">Caută</button>
			
			<button onclick="changeSrc('addbooks.php')">Adaugă</button>
			
			<button onclick="changeSrc('contact.php')">Contact</button>
			
			<button onclick="location.href = 'logout.php'">Deconectare</button>
			
		</div>

</div>

<div id="main">
  
  <div class="content">
  <iframe id="myframe" src="welcome.php"></iframe>
  </iframe>
</div>


	<div class="bookmark">
		<div class="b-up" id="b1"></div>
		<div class="b-down" id="b2"></div>
	</div>
	<div class="floatbutton">

	<button class="openbtn" id="sidebtn" onclick="openNav()">☰ Deschide Meniul</button>  </div>
	</body>
</html>

<script type="text/javascript" src="js/script.js"></script>