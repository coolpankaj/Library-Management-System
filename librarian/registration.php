<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Macondo" rel="stylesheet">

<script type="text/javascript" src="js/reg_validation.js"></script>
<style type="text/css">
	h1{font-family:'Joti One', cursive;}
legend{font-family: 'Macondo', cursive;text-align: center;word-spacing: 10px;letter-spacing: 5px;color: white;}
</style>
</head>
<body style="background-color: #c0c0c0;">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<h1 class="text-center">Library Management System</h1>
				<fieldset><legend>User Registration Form</legend></fieldset>
				<form name="registration" action="s_registration.php" method="POST" onsubmit="return validate_reg();">
					<div class="form-group input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input type="text" name="f_name" class="form-control" placeholder="First name"  />
					</div>
					<div class="form-group input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input type="text" name="l_name" class="form-control" placeholder="Last name"  />
					</div>
					<div class="form-group input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input type="text" name="username" class="form-control" placeholder="Username" />
					</div>
					<div class="form-group input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input type="password" name="password" class="form-control" placeholder="Password" />
					</div>
					<div class="form-group input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
						<input type="email" name="email" class="form-control" placeholder="Email" />
					</div>
					<div class="form-group input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></div>
						<input type="tel" name="contact" class="form-control" placeholder="Contact" />
					</div>
					<div class="form-group">
						<!-- <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div> -->
						<input type="text" name="sem" class="form-control" placeholder="SEM" />
					</div>
					<div class="form-group">
						<!-- <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div> -->
						<input type="text" name="enrollmentno" class="form-control" placeholder="Enrollment number" />
					</div>
					<div class="form-group">
						<button type="submit" name="submit" value="submit" class="btn btn-primary btn-medium btn-block">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>