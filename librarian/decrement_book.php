<?php
$b_id=$_REQUEST["book_id"];
include("connection.php");
$q="update add_books set books_qty=books_qty-1 where id='$b_id' and books_qty>0 ";
$qry=$con->query($q);
if ($qry == TRUE) 
{
	//echo "<script>alert('Book decremented');</script>";
	echo "<script>window.location.href='show_books.php';</script>";
}
else{
	echo "<script>alert('Error');</script>";
	echo "<script>window.location.href='show_books.php';</script>";
}
?>