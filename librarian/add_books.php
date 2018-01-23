
<!DOCTYPE html>
<html>
<head>
  <title>Add Books</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                <h2>Add Books</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <style type="text/css">
                                .box{transition: box-shadow .3s;margin: 0 auto;border: 1px solid silver;padding: 10px;border-radius: 2px;}
                                .box:hover {
                                   box-shadow: 0 0 11px rgba(33,33,33,.5); 
                                   }</style>
                                   <div class="container">
                                       <div class="col-md-8 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-12 ">
                                        <form action="add_books_db.php" method="POST" enctype="multipart/form-data" class="box">
                                              <div class="form-group">
                                              <label>Book name</label>
                                              <input type="text" name="book_name" placeholder="Book name" class="form-control" required="1" />
                                              </div>
                                              <div class="form-group">
                                                <label>Books image</label>
                                                <input type="file" name="book_image" class="form-control" placeholder="Book image" required="1">
                                              </div>
                                              <div class="form-group">
                                                <label>Book author name</label>
                                                <input type="text" name="book_author_name" class="form-control" placeholder="Book author name" required="1" />
                                              </div>
                                              <div class="form-group">
                                                <label>Publication name</label>
                                                <input type="text" name="publication_name" class="form-control" placeholder="Publication name" required="1" />
                                              </div>
                                              <div class="form-group">
                                                <label>Book purchase date</label>
                                                <input type="date" name="book_purchase_date" class="form-control" placeholder="Book purchase date" required="1" />
                                              </div>
                                              <div class="form-group">
                                                <label>Book price</label>
                                                <input type="text" name="book_price" class="form-control" placeholder="Book price" required="1" />
                                              </div>
                                              <div class="form-group">
                                                <label>Book quantity</label>
                                                <input type="text" name="book_qty" class="form-control" placeholder="Book quantity" required="1" />
                                              </div>
                                              <div class="form-group">
                                                <label>Available quantity</label>
                                                <input type="text" name="avl_qty" class="form-control" placeholder="Available quantity" required="1" /><br>
                                                <div class="form-group">
                                                  <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Add book</button>
                                                </div>
                                              </div>
                                        </form>
                              </div>   
                            
                            </div>
                          <!-- </div> -->
                       <!--  </div> -->
                <!--     </div>
                </div>
            </div>
        </div> -->
        <!-- /page content -->

<?php include ('footer.php'); ?>
</body>
</html>

