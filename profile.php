

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<style type="text/css">
		body{
			background:url('img/bkg/books.jpg');
			color:white;
			font-size: 1.5em;
		}
		table{
			margin-top:10%;
			margin-bottom:20px;
			color:white;
			background: rgb(0,0,0,0.7);
			padding:20px;
			text-align: center;
		}
		th{
			color:#FF4B2B;
		}
		.ch{

			position:relative;
			margin-top:20px;
			background:rgb(0,0,0,0.7);
			left:20%;
			width:60%;
			padding:20px;
		}
		input{
			font-size: 1em;
		}
		h2{
			color:#FF4B2B;
		}
		.but{
			margin-top:20px;
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
		}
		.but:hover{
			cursor:pointer;
			background:background:#ff3c1a;;
		}
	</style>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION["useruid"])) {
		header("location: signup.php?error=notconnected");}
		
	require_once 'includes/dbh.inc.php';
	$incercam = $_SESSION['useruid'];


	$query = "SELECT * from users where usersUid = '$incercam'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table  align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Poza profil </th>
<th> Utilizator </th>

</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
	$_SESSION["abc"] = $row["usersId"];
?>
<tr>
	<td>
	<img src="<?php echo $row["userImg"];?>" style="height:250px;border-radius:50%"> 

</td>
<td><?php echo $row["usersName"];?> </td>

</tr>


<?php

}
}

?>
</table>
<div class="ch">
<center><h2>Vrei să iți modifici poza de profil?</h2></center>

  <form action="test.php" method="post" enctype="multipart/form-data" align="center">
        <label for="fileSelect">Fișier:</label>
        <input type="file" name="image" id="fileSelect">
        <input type="submit" name="submit" value="Upload" class="but">
        
    </form>
  </div>
</body>
</html>
<br>