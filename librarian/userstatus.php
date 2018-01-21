<?php
$id=$_REQUEST["id"];
$st=$_REQUEST["st"];

include("connection.php");
if ($st=='active') 
{
	$q="update student_registration set status='deactive' where id='$id' ";
	$qry=$con->query($q);
	if ($qry==TRUE) 
	{
		echo "<script>alert('User deactivated.');</script>";
		echo "<script>window.location.href='display_student_info.php';</script>";
	}
	else{
		echo "<script>alert('Error.');</script>";
		echo "<script>window.location.href='display_student_info.php';</script>";
	}}

else
{
	if ($st=='deactive') 
{
	$q="update student_registration set status='active' where id='$id' ";
	$qry=$con->query($q);
	if ($qry==TRUE) 
	{
		echo "<script>alert('User activated.');</script>";
		echo "<script>window.location.href='display_student_info.php';</script>";
	}
	else{
		echo "<script>alert('Error.');</script>";
		echo "<script>window.location.href='display_student_info.php';</script>";
}
}
}
?>