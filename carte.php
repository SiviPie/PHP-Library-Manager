<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

		body{
			background:url("img/bkg/books.jpg");
			color:white;
			font-size: 1.5em;
			font-family: 'Montserrat', sans-serif;
			line-height:1.4;
		}
		.content{
			position:absolute;
			top:10%;
			left:15%;
			width:80%;


			
		}

		.comment {

        width: 80%;
        height: 100px;
        padding: 10px;
        background-color: rgb(5,5,5,0.5);
        font: 1.4em/1.6em cursive;
        color: white;
        display:block;
        border: 1px solid black;
      }
        .book-info{
          padding:2%;
      	position:relative;
      	left:10%;
      	width:86%;
      
      	background:rgba(0, 0, 0, 0.8);
      	border-radius:3px;
      	margin-bottom:10px;
      }

      .book-table{
      	border:none;

      }
        .ndrow{
      
      	font-weight:bold ;
      	width:15%;
      }

      .comment-section{
      		position:relative;
      	color:white;
		bottom:10%;
		
		left:10%;
		width:90%;

      }
      .comment-table{
      	left:20%;

      }
    
    
      .comment-left{

      	position:absolute;
      	padding-top: 20px;
      	width:41%;
      	
      	background:rgba(0, 0, 0, 0.8);
      	border-radius:3px;
        padding-bottom: 30px;
      }
      .comment-right{

      	position:absolute;
      	padding-top: 20px;
        padding-bottom:30px;
      	width:57%;
      	left:43%;
      	background:rgba(0, 0, 0, 0.8);
      	border-radius:3px;
      	}
      .but{
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
      button:hover{
  background:#ff3c1a;
  cursor: pointer;
}

th{
  color:#FF4B2B;
}
h2{
  color:#FF4B2B;
}

	</style>
</head>
<body>

<div class="content">

	<div class="book-info">
<?php  
	session_start();
	if (isset($_GET["carte"]) !== true) {

		header("location: ../biblioteca.php");
		exit();}
require_once ("includes/dbh.inc.php");

$bkid = $_GET["carte"];

$_SESSION['goback'] = substr($_SERVER['PHP_SELF'],9) . "?carte=".$bkid;


$_SESSION['bkid'] = $bkid;
$query = "select * from books where bookId = '$bkid'"; 
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table  align="center" cellpadding="5" cellspacing="5" class="book-table">

<tr>
<th> Coperta </th>
<th colspan="2" style="text-align:left"> Alte date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
	<td rowspan="4">
	<img src="<?php echo $row["bookCover"];?>" style="height:350px"> 
	<td class="ndrow">Titlu: </td>
	<td><?php echo $row["bookName"];?> </td>
</td>
</tr>

<tr>
<td class="ndrow">Autor</td>
<td><?php echo $row["bookAuthor"];?> </td>
</tr>
<tr>
	<td class="ndrow">Apariție</td>
<td><?php echo $row["bookPubDate"];?> </td>
</tr>
<tr>
<td colspan="2"><?php echo $row["bookDescription"];?> </td>

</tr>
</table>
</div>




<div class="comment-section">
	<div class="comment-left">
<center>
<h2>Adaugă un comentariu</h2>
<form action="includes/addcomment.inc.php" method="post">
			<input type="text" class="comment" name="comentariu" placeholder="Comentariu...">
		
			<button type="submit" name="submit" class="but">Trimite</button>
		
		</form>
</center>
</div>

<?php


}
}
?>

<div class="comment-right">
<center>Comentarii</center>
<hr style="width:50%;">
<?php

include_once "showcomments.php";
?>
</div>
</div>
</body>
</html>
<br>