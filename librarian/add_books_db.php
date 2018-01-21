<?php
session_start();
error_reporting(4);
if (isset($_POST["submit"]))
 {
	$book_name=$_POST["book_name"];
	$book_image=$_FILES["book_image"]["name"];
	move_uploaded_file($_FILES["book_image"]["tmp_name"],'books_images/'.$book_image);
	$book_author_name=$_POST["book_author_name"];
	$publication_name=$_POST["publication_name"];
	$book_purchase_date=$_POST["book_purchase_date"];
	$book_price=$_POST["book_price"];
	$book_qty=$_POST["book_qty"];
	$avl_qty=$_POST["avl_qty"];

	include('connection.php');
	$q="insert into add_books values ('','$book_name','$book_image','$book_author_name','$publication_name','$book_purchase_date','$book_price','$book_qty','$avl_qty')";
	$qry=$con->query($q);
	if ($qry == TRUE) 
	{
		echo "<script>alert('Book Added in database.');</script>";
		echo "<script>window.location.href='add_books.php';</script>";
	}

	else
	{
		echo "<script>alert('Error');</script>";
		echo "<script>window.location.href='add_books.php';</script>";
	}

}

?>