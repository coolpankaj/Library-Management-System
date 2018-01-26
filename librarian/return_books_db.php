<?php
$uid=$_REQUEST["uid"];
$b_name=$_REQUEST["b_name"];
$d=date("d-m-Y");
include("connection.php");
$q= "update issue_books SET books_return_date='$d' WHERE student_enrollment='$uid'; ";
$q .= "update add_books SET books_qty=books_qty+1 WHERE books_name='$b_name'; ";
$q .="DELETE  from issue_books WHERE student_enrollment='$uid' AND books_name='$b_name' ;";
$qry=mysqli_multi_query($con,$q);


if ($qry == TRUE) 
{

		echo "<script>alert('Books return successfully.');</script>";
		echo "<script>window.location.href='return_books.php';</script>";
 

}
else{
	echo "<script>alert('Error');</script>";
		echo "<script>window.location.href='return_books.php';</script>";
	
}

?>