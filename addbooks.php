
<!DOCTYPE HTML>
<html>
	<head>
		<title>Adauga Carte</title>
		<link rel="stylesheet" type="text/css" href="css/auth.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style type="text/css">
			body{
				background:url("img/bkg/books.jpg");
				
			}

			.mesaj{
				padding:10px;
				background:rgb(0,0,0,0.7);
				color:white;
				position: relative;
				width:70%;
				margin-bottom:20px;
			}
			h2{
				color:#FF4B2B;
				font-size: 2em;
			}
			p{
				line-height: 1.5;
				padding: 20px;
				font-weight: normal;
				font-size:1.5em;
			}

			.but:hover{
				cursor:pointer;
				background:#ff3c1a;
			}


		</style>


	</head>
<body>





<div class="mesaj">
	<h2>manager_biblioteca</h2>
	<p>Daca nu gasesti o carte anume in biblioteca, o poti adauga utilizand formularul de mai jos. Trebuie doar sa introduci datele cartii dorite, iar apoi sa dai click pe butonul "Trimite".</p>
</div>


<center>
<div class="wrapper">
<form action="includes/addbooks.inc.php" method="post" enctype="multipart/form-data" style="padding-top: 20px; padding-bottom: 20px;">
	<div class="formular">
		<div id="titlu">
			<input type="text" name="title" placeholder="Titlu...">
		</div>
		<div id="author">
			<input type="text" name="author" placeholder="Autor...">
		</div>
		<div id="edition">
			<input type="text" name="edition" placeholder="Anul aparitiei...">
		</div>
		<div id="description">
			<input type="text" name="description" placeholder="Descriere...">
		</div>
		<div id="cover">
			<input type="file" name="cover" placeholder="Coperta...">
		</div>
		<div id="buton">
			<button type="submit" name="submit" class="but">Trimite</button>
		</div>
	</div>
</form>
	
</div>
</body>
</html>