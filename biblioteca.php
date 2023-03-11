<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: url('img/bkg/books.jpg');

			color:white;
		}
		th{
			color:#FF4B2B;
		}
.content{
	padding:20px;
	top:10%;
	position: absolute;
	left:15%;
	width:80%;
	background:rgba(0, 0, 0, 0.8);
	font-size: 1.6em;
	border-radius:3px;
}
a{
	text-decoration: none;
	color:white;
}

a:hover{
	color:gray;
}

	</style>
</head>
<body>
<div class="content">

<?php
include_once ("includes/dbh.inc.php");



$query = "select * from books"; 
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table  align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Titlu </th>
<th> Autor </th>
<th> Apariție </th>
<th> Descriere </th>
<th> Copertă </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
	
<td><a href="carte.php?carte=<?php echo $row['bookId'];?>   "><?php echo $row["bookName"];?> </a></td>
<td><?php echo $row["bookAuthor"];?> </td>
<td><?php echo $row["bookPubDate"];?> </td>
<td><?php echo $row["bookDescription"];?> </td>
<td>
	<img src="<?php echo $row["bookCover"];?>" style="height:200px"> 

</td>
</tr>
<?php
}
}
else
echo "<center>Nu exista carti in biblioteca</center>" ;
?>
</table>
</div>

</body>
</html> 