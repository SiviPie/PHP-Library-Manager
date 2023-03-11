

<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$results;
	if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }

 function invalidUid($username) {
	$results;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }

  function invalidEmail($email) {
	$results;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }

 function pwdMatch($pwd, $pwdRepeat) {
	$results;
	if($pwd !== $pwdRepeat){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }

 function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt, $sql)){
 		header("location: ../signup.php?error=stmtfailed");
	exit();
 	}

 	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
 	mysqli_stmt_execute($stmt);

 	$resultData = mysqli_stmt_get_result($stmt);

 	if($row = mysqli_fetch_assoc($resultData)){
 			return $row;
 	}
 	else{
 		$result = false;
 		return $result;
 	}

 	mysqli_stmt_close($stmt);

 }

function createUser($conn, $name, $email, $username, $pwd) {
	$sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt, $sql)){
 		header("location: ../signup.php?error=stmtfailed");
	exit();
 	}

 	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

 	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
 	mysqli_stmt_execute($stmt);
 	mysqli_stmt_close($stmt);
 	header("location: ../signup.php?error=none");
 	exit();
 }
function emptyInputLogin($username, $pwd) {
	$results;
	if(empty($username) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }

function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username, $username);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	else if($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersID"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../dashboard.php");
		exit();
	}
}

// for books

function emptyInputBooks($title, $author, $edition, $description)
{
$results;
	if(empty($title) || empty($author) || empty($edition) || empty($description)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function bookExists($conn, $title, $author)
{
$sql = "SELECT * FROM books WHERE bookName = ? AND bookAuthor = ?;";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt, $sql)){
 		header("location: ../addbooks.php?error=stmtfailed");
	exit();
 	}

 	mysqli_stmt_bind_param($stmt, "ss", $title, $author);
 	mysqli_stmt_execute($stmt);

 	$resultData = mysqli_stmt_get_result($stmt);

 	if($row = mysqli_fetch_assoc($resultData)){
 			return $row;
 	}
 	else{
 		$result = false;
 		return $result;
 	}

 	mysqli_stmt_close($stmt);

}

function createBook($conn, $title, $author, $edition, $description,$cover){
	$sql = "INSERT INTO books (bookName, bookAuthor, bookPubDate, bookDescription, bookCover) VALUES (?, ?, ?, ?, ?);";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt, $sql)){
 		header("location: ../addbooks.php?error=stmtfailed");
	exit();
 	}

 	mysqli_stmt_bind_param($stmt, "sssss", $title, $author, $edition, $description,$cover);
 	mysqli_stmt_execute($stmt);
 	mysqli_stmt_close($stmt);
 	header("location: ../addbooks.php?error=none");
 	exit();
}

// for comments

function emptyComment($comentariu)
{
$results;
	if(empty($comentariu)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function createComment($conn, $user, $bkid, $comentariu){
	$sql = "INSERT INTO books_comments (usersId, bookId, com) VALUES (?, ?, ?);";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt, $sql)){
 		header("location: ../biblioteca.php?error=stmtfailed");
	exit();
 	} 

 	mysqli_stmt_bind_param($stmt, "iis", $user, $bkid, $comentariu);
 	mysqli_stmt_execute($stmt);
 	mysqli_stmt_close($stmt);
 	session_start();
 	header("location: ../". $_SESSION['goback']);
 	exit();
}

// for profile

function changePhoto($conn, $photo, $user){
	$sql = "UPDATE users
			SET userImg = ?
			WHERE usersUid = '$user';";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt, $sql)){
 		header("location: profile.php?error=stmtfailed");
	exit();
 	}

 	mysqli_stmt_bind_param($stmt, "s", $photo);
 	mysqli_stmt_execute($stmt);
 	mysqli_stmt_close($stmt);
 	header("location: profile.php");
 	exit();
}