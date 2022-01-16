<?php

require "config/constants.php";

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
		<link rel="stylesheet" type="text/css" href="style.css"/>
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Ecommerce</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
</body>	
</html>
















		