<?php
$uid=$_REQUEST["uid"];
$d=date("d-m-Y");
include("connection.php");
$q="update issue_books SET books_return_date='$d' WHERE id='$uid' ";
$qry=$con->query($q);

if ($qry== TRUE) 
{

		echo "<script>alert('Books return successfully.');</script>";
		echo "<script>window.location.href='return_books.php';</script>";
 

}
else{
	echo "<script>alert('Error');</script>";
		echo "<script>window.location.href='return_books.php';</script>";
	
}

?>