<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
require_once "includes/dbh.inc.php";

require_once "includes/functions.inc.php";
$image_name = $_FILES['image']['name'] ;

$target_file = "img/users/" . "$image_name";

// if folder not exists than it will make folder.


if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
{
      
      changePhoto($conn, $target_file  ,$_SESSION['useruid']);


}
else
{
      echo "error in file upload";
}

?>
</body>
</html>
