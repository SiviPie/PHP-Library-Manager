<?php




require_once 'includes/dbh.inc.php';
$bkid = $_SESSION['bkid'];

$query = "SELECT * from books_comments where bookId = '$bkid'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>


<table align="center" cellpadding="5" cellspacing="5" class="comment-table">

<tr>
<th></th>
<th> Utilizator </th>
<th> Comentariu </th>

</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
	<td>
	<?php
	

	$uaux = $row["usersId"];
	$query2 = "SELECT userImg from users where usersId = '$uaux';";
	$result2 = mysqli_query($conn, $query2);
	$row2 = mysqli_fetch_assoc($result2);
	?>
	<img src="<?php echo $row2['userImg']; ?>" height=75px>

	</td>
	<td>
	<?php
	

	$uaux = $row["usersId"];
	$query3 = "SELECT usersUid from users where usersId = '$uaux';";
	$result3 = mysqli_query($conn, $query3);
	$row3 = mysqli_fetch_assoc($result3);
	echo $row3['usersUid'];
	?>

</td>
<td><?php echo $row["com"];?> </td>

</tr>


<?php
}
}
else
echo "<center>Nu exista comentarii</center>" ;
?>
</table>
