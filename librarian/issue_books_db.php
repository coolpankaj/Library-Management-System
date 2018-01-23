<?php
if (isset($_POST["submit1"]))
 {
 		$student_enrollment=$_POST["student_enrollment"];
 		$student_name=$_POST["student_name"];
 		$student_sem=$_POST["student_sem"];
 		$student_contact=$_POST["student_contact"];
 		$student_email=$_POST["student_email"];
 		$books_name=$_POST["books_name"];
 		$books_issue_date=$_POST["books_issue_date"];
 		$student_username=$_POST["student_username"];

 		include("connection.php");
 		$q="insert into issue_books values ('','$student_enrollment','$student_name','$student_sem','$student_contact','$student_email','$books_name','$books_issue_date','','$student_username');";
 		$qry=$con->query($q);
 		if ($qry==TRUE) 
 		{
 			echo "<script>alert('Book issued successfully..');</script>";
 			header("location:http://localhost/phplms/librarian/issue_books.php");
 		}

 		else{

 			echo "<script>alert('Error..');</script>";
 			header("location:http://localhost/phplms/librarian/issue_books.php");
 		}

}


?>