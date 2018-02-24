<?php session_start();
error_reporting(4); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Books Info</title>
	
</head>
<body>
<?php include('header.php'); ?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Information </h3>
                    </div>

                  <!--   <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue books</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form action="" method="POST" >
                                <div class="form-group input-group ">
                                <select  name="enr_op" class="form-control">
                                         <?php 
                                              include("connection.php");
                                              $q="select * from student_registration";
                                              $qry=$con->query($q);
                                              while($r=$qry->fetch_array())
                                              {
                                                echo "<option>";
                                                  echo $r['enrollment'];
                                              echo "</option>";
                                              }
                                              
                                         ?>
                                        </select><span class="input-group-btn"><button class="btn btn-info" type="submit" name="submit" value="submit"><i class="glyphicon glyphicon-search"></i></button></span>
                                  </div>
                                <!-- </form> -->
                  <?php
                    if(isset($_POST["submit"]))
                    {
                      $enr_op=$_POST["enr_op"];
                      include("connection.php");
                      $q1="select * from student_registration where enrollment='$enr_op' ";
                      $qry1=$con->query($q1);
                      while($q=$qry1->fetch_array())
                      {
                          $firstname=$q["firstname"];
                          $lastname=$q["lastname"];
                          $username=$q["username"];
                          $email=$q["email"];
                          $contact=$q["contact"];
                          $sem=$q["sem"];
                          $enrollment=$q["enrollment"];
                          $_SESSION["enrollment"]=$enrollment;
                          $_SESSION["username"]=$username;
                    }
                      
                      ?>

                        <!-- <form action="issue_books_db.php" method="POST" > -->
                        <div class="table table-responsive text-center">
                          <table class="table table-hover table-condensed">
                            <tr>
                              <td><input type="text" name="student_enrollment" value="<?php print $enrollment; ?>" class="form-control" placeholder="Enrollment number" disabled="1"></td>
                            </tr>
                            <tr>
                              <td>
                                <input type="text" name="student_name" value="<?php print $firstname.' '.$lastname; ?>" class="form-control" placeholder="Student name"></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="student_sem" value="<?php print $sem; ?>" class="form-control" placeholder="Student sem"></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="student_contact" value="<?php print $contact; ?>" class="form-control" placeholder="Student contact"></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="student_email" value="<?php print $email; ?>" class="form-control" placeholder="Student email"></td>
                            </tr>
                            <tr>
                              <td><select name="books_name" class="form-control">
                                <?php 
                                    include("connection.php");
                                    $q2="select * from add_books";
                                    $qry2=$con->query($q2);
                                    while($s=$qry2->fetch_array())
                                    {

                                      echo "<option>";
                                        echo $s["books_name"];
                                      echo "</option>";
                                    }
                                 ?>
                              </select></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="books_issue_date" value="<?php print date('d-m-Y'); ?>" class="form-control" placeholder="Books issue date"></td>
                            </tr>
                            <!-- <tr>
                              <td><input type="date" name="books_return_date" value="" class="form-control" placeholder="Books return date"></td>
                            </tr> -->
                            <tr>
                              <td><input type="text" name="student_username" value="<?php print $username; ?>" class="form-control" placeholder="Student username" disabled="1"></td>
                            </tr>

                            <tr style="width:100px;"><td>
                              <button type="submit" name="submit1" value="submit1" class=" form-control btn btn-success btn-block">Go !</button></td>
                            </tr>
                            
                          </table>
                          
                        </div>
                        </form>
                        <?php }
                        ?>
                 <?php
if (isset($_POST["submit1"]))
 {
    // $student_enrollment=$_POST["student_enrollment"];
    $student_name=$_POST["student_name"];
    $student_sem=$_POST["student_sem"];
    $student_contact=$_POST["student_contact"];
    $student_email=$_POST["student_email"];
    $books_name=$_POST["books_name"];
    $books_issue_date=$_POST["books_issue_date"];
    // $student_username=$_POST["student_username"];

    include("connection.php");
    $qty=0;
    $p="SELECT * FROM add_books WHERE books_name='$books_name';";
    $pry=$con->query($p);
    while ($r=$pry->fetch_array()) 
    {
      $qty=$r[7];
      // print($qty);
    }

    if ($qty==0)
     {
      
      echo "<script>alert('All books are already issued.');</script>";
      header("location:http://localhost/phplms/librarian/issue_books.php");
    }
    else{
    $q="insert into issue_books values ('','$_SESSION[enrollment]','$student_name','$student_sem','$student_contact','$student_email','$books_name','$books_issue_date','','$_SESSION[username]');";
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
}


?>

                              
                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php include ('footer.php'); ?>
</body>
</html>



