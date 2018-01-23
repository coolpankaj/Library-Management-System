
<!DOCTYPE html>
<html>
<head>
  <title>student info |</title>
  <!-- Latest compiled and minified CSS -->
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
                                <h2>Student Info Area</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               
                               <?php
                               include ('connection.php');
                               $q="select * from student_registration";
                               $qry=$con->query($q);

                               if($qry->num_rows>0)
                                    {
                                echo "<div class='table-responsive'> ";
                               echo "<table class='table table-striped table-bordered table-hover table-condensed'><thead>";
                               echo "<th>S No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>;
                                    <th>Username</th>;
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Sem</th>
                                    <th>Enrollment</th>
                                    <th>Status</th></thead>";

                                 while ($r=$qry->fetch_array())
                                  {
                                     echo "<tbody><tr><td>".$r[0]."</td>";
                                       echo       "<td>".$r[1]."</td>";
                                       echo       "<td>".$r[2]."</td>";
                                        echo      "<td>".$r[3]."</td>";
                                        echo      "<td>".$r[4]."</td>";
                                        echo      "<td>".$r[5]."</td>";
                                        echo      "<td>".$r[6]."</td>";
                                        echo      "<td>".$r[7]."</td>";
                                        echo      "<td>".$r[8]."</td>";
                                        echo      "<td><a href='userstatus.php?id=$r[0] && st=$r[9]'>".$r[9]."</td></tr></tbody>";  
                                    }   
                               echo "</div></table>";
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