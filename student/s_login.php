<?php
if (isset($_POST["submit"]))
 {
	$username=$_POST["username"];
	$password=$_POST["password"];
	include('connection.php');
	$q="select * from student_registration where username='$username' and password='$password' && status='active' ";
	$qry=$con->query($q);
	if ($qry->num_rows>0) {
		$_SESSION["slms_ssid"]=$username;
		echo "<script>alert('Login Successfull.');</script> ";
		echo "<script>window.location.href='display_student_info.php'</script>";
	}
	else{
		echo "<script>alert('invalid login.');</script>";
		echo "<script>window.location.href='login.php';</script>";
	}
}
?>