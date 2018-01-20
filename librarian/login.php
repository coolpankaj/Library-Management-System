<!DOCTYPE html>
<html>
<head>
	<title>Home | Library Management System</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Macondo" rel="stylesheet">
<style type="text/css">
h1{
font-family:'Joti One', cursive;
}
legend{font-family: 'Macondo', cursive;text-align: center;word-spacing: 10px;letter-spacing: 5px;color: white;}
</style>
</head>
<body style="background-color: #c0c0c0;">
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-5 col-xs-offset-3">
			<h1 class="text-muted text-center">Library Management System</h1><br><br>
			<fieldset><legend>Librarian Login Form</legend></fieldset>
			<form name="login" action="l_login.php" method="POST">
				<div class="form-group input-group">
					<input class="form-control" type="name" name="username" placeholder="Username" required="" autocomplete="off" />
					<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				</div>
				<div class="form-group input-group">
					<input type="password" class="form-control" name="password" placeholder="Password" required="" />
					<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-block" type="submit" name="submit" value="submit">Access</button><br>
					<a href="#" class="pull-right text-muted" style="text-decoration: none;">Forgotten Passsword ?</a>
				</div>
			</form>
			<hr>
			<h5 class="text-muted text-center">New to site ? <a href="registration.php" style="text-decoration: none;">Create account</a></h5>
		</div>
	</div>
</div>

</body>
</html>