<?php
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Atestat</title>
		
		<link rel="stylesheet" type="text/css" href="css/auth.css">
		<style type="text/css">


@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

			.mesaj{
			color:black;
			padding:20px;
			font-weight: bold;
			}
			li{
			list-style-type: none;
			margin:20px;
			border-radius: 20px;
			border: 1px solid #FF4B2B;
			background-color: #FF4B2B;
			color: #FFFFFF;
			font-size: 12px;
			text-align: center;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			}
			
			li:hover{
				cursor:pointer;
				background:#ff3c1a;
			}
			a{

			color: white;
			font-size: 14px;
			text-decoration: none;
			font-weight: bold;
			margin: 15px 0;
			text-align: center;
			}
			.mesaj{
				font-family: 'Montserrat', sans-serif;
				
			
			}
			.choice{
				padding: 20px;

			}
			p{	
				color:white;
				font-weight: bold;
				letter-spacing: 1px;
				line-height: 2;
				text-align: center;
				font-size: 2em;
				text-transform: uppercase;
				transition: transform 80ms ease-in;
			}
			</style>
	</head>
	<body class="rainbow">
		
		<div class="wrapper">

				<div class="mesaj">
			<p>Bine ai venit! <br/>Ce dorești să faci?</p>
		</div>
		<div class="choice">
			
				<?php
					if(isset($_SESSION["useruid"]))
					{
						echo "<li ><a href='dashboard.php'>Acasa</a></li>";
						echo "<li><a href='includes/logout.inc.php'>Deconectare</a></li>";
					}
					else
					{
						echo "<li><a href='signup.php'>Inregistrare</a></li>";
						echo "<li><a href='login.php'>Autentificare</a></li>";
					}
					?>
			
		</div>
	</div>




<?php
	include_once 'footer.php';
?>

