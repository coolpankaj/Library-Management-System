<?php
$id=$_REQUEST["delete_id"];
include("connection.php");
$q="delete from add_books where id='$id' ";
$qry=$con->query($q);
if ($qry== TRUE) 
{
	echo "<script>alert('Book deleted successfully...')</script>";
  	//echo "<script>window.location.href='viewuser.php'</script>";
  	echo "<script>window.location.href='show_books.php'</script>";
  	
}
else
{
echo "<script>alert('There is an error...')</script>";
echo "<script>window.location.href='show_books.php'</script>";

}

?>