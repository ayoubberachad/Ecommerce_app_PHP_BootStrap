<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
				<style>
			.navbar-inverse {

    background-color: #122b56;
    border-color: #080808;
} 
.navbar-inverse .navbar-nav > li > a {
    color: #ffffff;
}
.navbar-inverse .navbar-brand {
      color: #ffffff;
}

.btn-primary {
    color: #fff;
    background-color: #d8cc3e;
    border-color: #d8cc3e;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
    color: #fff;
    background-color: #002b56;
}
.panel-info > .panel-heading {
    color: #ffffff;
    background-color: #696969;
    border-color: #696969;
}
.btn-danger {
    color: #fff;
    background-color: #d8cc3e;
    border-color: #d8cc3e;
}
.btn-danger:hover {
    color: #fff;
    background-color: #ec971f;
  border-color: #d58512;
}
 
.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .open > a:hover {
    color: #fff;
    background-color: #d8cc3e;
}

 
.panel-info {
    border-color: #6969693d;
}
.nav > li > a {
    color: #000000;
   
}

.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning {
    color: #fff;
    background-color: #d8cc3e;
    border-color: #d8cc3e;
}
	
.btn-primary:hover {
  color: #fff;
 background-color: #ec971f;
  border-color: #d58512;
}

.nav > li > a:focus, .nav > li > a:hover {
    color: white;
    text-decoration: none;
    background-color: #696969;
}

.navbar-inverse {
    color: white;
    background-color: #122b56;
    border-color: #122b56;
}

.navbar-inverse .navbar-nav > li > a {
    color: #ffffff;
}
 

.panel-primary > .panel-heading {
    color: #fff;
   background-color: #122b56;
    border-color: #122b56;
}
.panel-primary{
	 border-color: #6969693d;
}

	
		</style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Ecommerce Site</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">Customer Registration Form</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Confirm Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Contact Number</label>
								<input type="text" id="mobile" name="mobile"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address 1</label>
								<input type="text" id="address1" name="address1"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address 2</label>
								<input type="text" id="address2" name="address2"class="form-control" required>
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















