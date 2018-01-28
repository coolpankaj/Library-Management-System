<?php

    session_start();
    include("header.php");

?>



 <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
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
                                <h2>My Information</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <h4>Your enrollment no. = <?php 
                                    include("connection.php");
                                    $q="select * from student_registration;";
                                    $qry=$con->query($q);
                                    while ($r=$qry->fetch_array())
                                     {
                                        $enrollment=$r["enrollment"];
                                    }

                                        print $enrollment;
                                    ?>
                                 </h4>
                                 <div class="table table-responsive">
                                 <table class="table table-bordered table-hover">
                                     <?php
                                     include("connection.php");
                                     $q1="select * from issue_books where student_enrollment='$enrollment' ;";
                                     $qry1=$con->query($q1);
                                     
                                     echo "<thead>
                                         <tr><th>Name</th>
                                         <th>Sem</th>
                                         <th>Contact</th>
                                         <th>Email</th>
                                         <th>Books name</th>
                                         <th>Book issue date</th>
                                         <th>Username</th></tr>

                                     </thead>";
                                    
                                     while ($s=$qry1->fetch_array()) 
                                     {
                                        $abc=$s["student_name"];
                                        print $abc;


                                        


                                     }
                                     ?>
                                 </table>

                                 
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include("footer.php");  ?>