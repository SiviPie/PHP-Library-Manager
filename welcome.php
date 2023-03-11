<?php
		session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome_page</title>

	<style type="text/css">
		.mesaj{
			color:#FF4B2B;
			position:absolute;
			top:20%;
			left:50%;
			font-weight: bold;
			font-size: 5em;
		}
		
	</style>
</head>
<body>

<center><div class="mesaj">Bine ai venit, <?php echo $_SESSION["useruid"]."!"?></div></center>


<?php
		include_once "pisic.php";
		?>
		
<?php	include_once 'footer.php'
?>
</body>
</html>


