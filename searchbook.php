
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/auth.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">

			body{
				background:url("img/bkg/books.jpg");
			}
		h2{
			color: #FF4B2B;
			background: rgb(0,0,0,0.7);
			 text-shadow: 2px 2px #black;


		}

		.but{
			border-radius: 20px;
	border: 1px solid #FF4B2B;
			background-color: #FF4B2B;
			color: #FFFFFF;
			font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;

	border: 1px solid #FF4B2B;
		}

		.but:hover{
			cursor: pointer;
			background:#ff3c1a;
		}
		</style>
</head>
<body>

<div class="wrapper">
<center><h2>Caută o carte</h2></center>
	<form action = "displaybooks.php" method="get">

<center>Introdu titlul cărții pe care vrei să o cauți:
<input type="text" name="search" placeholder="Cauta...">
<br></br>
<input type="submit" value="Caută" class="but">
<input type="reset" value="Resetează" class="but">
</center>
<br>
</form>



		
</div>

</body>
</html>