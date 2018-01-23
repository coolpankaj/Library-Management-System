<?php

	$books_name=$_POST["book_name"];
	include('connection.php');
	$q="select * from add_books where books_name LIKE '%$books_name%' ";
	     $qry=$con->query($q);
                               if($qry->num_rows>0)
                                    {
                                echo "<div class='table-responsive text-center'> ";
                               echo "<table class='table table-striped table-hover table-condensed'>";
                               echo "<thead><tr><th>S No.</th>
                                    <th>Book Name</th>
                                    <th>Book image</th>;
                                    <th>Book author name</th>;
                                    <th>Publication name</th>
                                    <th>Purchase date</th>
                                    <th>Book price</th>
                                    <th>Book Qty.</th>
                                    <th>Available</th>
                                    <th>Action</th></tr></thead>";
                                    

                                 while ($r=$qry->fetch_array())
                                  {
                                     echo "<tbody><tr><td>".$r[0]."</td>";
                                       echo       "<td>".$r[1]."</td>";
                                       echo       "<td><img src='books_images/$r[2]' height='100' width='100' ></td>";
                                        echo      "<td>".$r[3]."</td>";
                                        echo      "<td>".$r[4]."</td>";
                                        echo      "<td>".$r[5]."</td>";
                                        echo      "<td>".$r[6]."</td>";
                                        echo      "<td>".$r[7]."</td>";
                                        echo      "<td>".$r[8]."</td>";
                                        echo "<td><a href='delete_book.php?delete_id=$r[0]' style='color:red;font-weight:bold;'>Delete</a>
                                                  <br>
                                                  <a href='decrement_book.php?book_id=$r[0]' style='color:red;font-weight:bold;'>Decrement</a></tbody> ";
                                        // echo      "<td><a href='userstatus.php?id=$r[0] && st=$r[9]'>".$r[9]."</td></tr></tbody>";  
                                    }   
                               echo "</div></table>";
}
?>