<?php
	include_once 'header2.php';
?>

<?php  
	if (isset($_GET["error"])) {
		if($_GET["error"] == "emptyinput"){
			echo "<div id='eroare'>Completează toate câmpurile!</div>";
		}
		else if ($_GET["error"] == "invaliduid") {
			echo "<div id='eroare'>Alege un alt nume de utilizator!</div>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<div id='eroare'>Adresa de email nu este validă!</div>";
		}
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<div id='eroare'>Parolele nu se potrivest. Încearcă din nou!</div>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<div id='eroare'>Ceva nu a funcționat!</div>";
		}
		else if ($_GET["error"] == "usertaken") {
			echo "<div id='eroare'>Numele de utilizator există deja!</div>";
		}
		else if ($_GET["error"] == "none") {

			echo "<div id='victorie'>Te-ai inregistrat cu succes! Acum te poti conecta</div>";
		}
	}
?>

	<section class="signup-form">
		<h2 style="color:black"> Inregistrare</h2>
		<form action="includes/signup.inc.php" method="post" class="">
			<input type="text" name="name" placeholder="Numele tău...">
			<input type="text" name="email" placeholder="Email...">
			<input type="text" name="uid" placeholder="Utilizator...">
			<input type="password" name="pwd" placeholder="Parola...">
			<input type="password" name="pwdrepeat" placeholder="Reintrodu parola...">
			<button type="submit" name="submit"style="position:relative;margin-top:10px; ">Inregistrare</button>
		<a href="login.php">Sau da click aici pentru <span id="sau">Autentificare</span></a>	
		</form>

		

	</section>




