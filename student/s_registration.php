<?php
if (isset($_POST["submit"])) {
	
$fname=$_POST["f_name"];
$lname=$_POST["l_name"];
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$sem=$_POST["sem"];
$enrollmentno=$_POST["enrollmentno"];
// $con=mysqli_connect("localhost","root","","lms");
include ('connection.php');
$q="insert into student_registration values ('','$fname','$lname','$username','$password','$email','$contact','$sem','$enrollmentno','no')";
$qry=$con->query($q);
if ($qry == TRUE) {
	echo "<script>alert('Registration succcessfull.');</script>";
	echo "<script>window.location.href='registration.php';</script> ";

}
else{
	echo "<script>alert('ERROR.');</script>";
}
}
?>