

<?php
session_start();
if (isset($_POST["submit"])) {
	
	$comentariu=$_POST["comentariu"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if(emptyComment($comentariu) !== false) {
		header("location: ../biblioteca.php");
		exit();
	}
	$user = $_SESSION['abc'];
	$bkid = $_SESSION['bkid'];
	
	createComment($conn, $user, $bkid, $comentariu);

	
}



else{
	header("location: ../welcome.php");
	exit();
}
