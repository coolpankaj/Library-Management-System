<?php
session_start();
if (isset($_POST["submit"])) {
	$username=$_POST["username"];
	$password=$_POST["password"];
	include('connection.php');
	$q="select * from librarian_registration where username='$username' and password='$password' ";
	$qry=$con->query($q);
	if ($qry->num_rows>0) {
		$_SESSION['llms_ssid']=$username;
		 // print_r($_SESSION);
		echo "<script>alert('Login Successfull.');</script> ";
		echo "<script>window.location.href='display_student_info.php';</script>";
		 // header("location:http://localhost/phplms/librarian/display_student_info.php");
	}
	else{
		echo "<script>alert('invalid login.');</script>";
		echo "<script>window.location.href='login.php';</script>";
	}
}
?>