<?php
session_start();
if (isset($_POST["submit"])) {
	
	$title=$_POST["title"];
	$author=$_POST["author"];
	$edition=$_POST["edition"];
	$description=$_POST["description"];
	if($_FILES["cover"]["name"] == ""){$cover="img/books/default.jpg";}
	  		else {

	  		$image_name = $_FILES['cover']['name'] ;
			$target_file = "../img/books/" . "$image_name";
			$cover="img/books/".$_FILES['cover']['name'];

		if(!move_uploaded_file($_FILES['cover']['tmp_name'], $target_file))

{
	header("location: ../addbooks.php?error=fileupload");

	exit();
}

	  			}
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if(emptyInputBooks($title, $author, $edition, $description) !== false) {
		header("location: ../addbooks.php?error=emptyinput");
		exit();
	}
	if(bookExists($conn, $title,$author) !== false) {
		header("location: ../addbooks.php?error=alreadyexists");
		exit();
	}

	createBook($conn, $title, $author, $edition, $description,$cover);
}

else{
	header("location: ../welcome.php");
	exit();
}