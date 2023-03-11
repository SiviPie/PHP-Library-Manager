<?php
	include_once 'header2.php';
?>

<?php  
	if (isset($_GET["error"])) {
		if($_GET["error"] == "emptyinput"){
			echo "<p id='eroare'>Completează toate câmpurile!</p>";
		}
		else if ($_GET["error"] == "wronglogin") {
			echo "<p id='eroare'>Date de autentificare incorecte!";
		}
	}
?>
	<section class="login-form">
		<h2 style="color:black;">Autentificare</h2>
		<form action="includes/login.inc.php" method="post">
			<input type="text" name="uid" placeholder="Utilizator/Email...">
			<input type="password" name="pwd" placeholder="Parola...">
			<button type="submit" name="submit" style="position:relative;margin-top:10px; ">Autentificare</button>
		<a href="signup.php">Sau da click aici pentru <span id="sau">Inregistrare</span></a>
		</form>

		
	</section>



