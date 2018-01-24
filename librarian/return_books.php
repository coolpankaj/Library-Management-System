<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Books Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Return books</h2>
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
                      $q1="select * from issue_books where student_enrollment='$enr_op' ";
                      $qry1=$con->query($q1);
                               echo "<div class='table-responsive'> ";
                               echo "<table class='table table-striped table-hover table-condensed table-bordered '>";
                               echo "<thead><tr><th>S No.</th>
                                    <th>Enrollment No.</th>
                                    <th>Name</th>
                                    <th>Sem.</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Book name</th>
                                    <th>Book issue date</th>
                                    <th>Username</th>
                                    <th>Action</th></tr></thead>";
                                    
                      while($q=$qry1->fetch_array())
                      {
                         
                          $s_no=$q["id"];
                          $student_enrollment=$q["student_enrollment"];
                          $student_name=$q["student_name"];
                          $student_sem=$q["student_sem"];
                          $student_contact=$q["student_contact"];
                          $student_email=$q["student_email"];
                          $books_name=$q["books_name"];
                          $books_issue_date=$q["books_issue_date"];
                          $student_username=$q["student_username"];
                          //$_SESSION["student_enrollment"]=$student_enrollment;
                          //$_SESSION["student_username"]=$student_username;
                    
                      ?>
                      

                                 <tbody><tr><td><?php print $s_no;  ?></td>
                                              <td><?php print $student_enrollment;  ?></td>
                                              <td><?php print $student_name;  ?></td>
                                              <td><?php print $student_sem;  ?></td>
                                              <td><?php print $student_contact;  ?></td>
                                              <td><?php print $student_email;  ?></td>
                                              <td><?php print $books_name;  ?></td>
                                              <td><?php print $books_issue_date;  ?></td>
                                              <td><?php print $student_username;  ?></td>
                                        
                                              <td><a href='return_books_db.php?uid=<?php print $s_no; ?>' style="color: red;">Return Book</a></td></tr></tbody>
                                      
                                </table></div>                              
                             <?php  }}
                             
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



