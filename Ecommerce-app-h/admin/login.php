<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sliding Sign In</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/e873c2c6f0.js" crossorigin="anonymous"></script>
</head>
<body>

 
  <div class="container" id="container">
   	<div class="form-container sign-up-container">
	     <form id="admin-register-form">
	        <h1>Create Account</h1>
	          <div class="social-container">
		          <a href="https://web.facebook.com/search/top?q=berachadstore" target="_blank" class="social" >
		          <i class="fab fa-facebook-f"></i></a>
		          <a href="https://www.youtube.com/channel/UCDWs1kV57qFNaHkmyxU_5ug" target="_blank" class="social">
		          <i class="fab fa-youtube"></i></a>
		          <a href="#" class="social"><i class="fab fa-linkedin-in" target="_blank"></i></a>
		        </div>
	        <span>or use your email for registration</span>
	 	    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
	        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
	        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
	        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
	        <input type="hidden" name="admin_register" value="1">
	        <p class="message"></p>
			<button type="button" class="btn btn-primary register-btn">Register</button>
	      </form>
        </div>






		<div class="form-container sign-in-container">			
			<form id="admin-login-form">
		
				 <h1>Sign In</h1>
		        <div class="social-container">
		          <a href="https://web.facebook.com/search/top?q=berachadstore" target="_blank" class="social" >
		          <i class="fab fa-facebook-f"></i></a>
		          <a href="https://www.youtube.com/channel/UCDWs1kV57qFNaHkmyxU_5ug" target="_blank" class="social">
		          <i class="fab fa-youtube"></i></a>
		          <a href="#" class="social"><i class="fab fa-linkedin-in" target="_blank"></i></a>
		        </div>
		         <span>or use your account</span>  
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email"/>
			    <input type="password" name="password" id="password" placeholder="Password">
				<input type="hidden" name="admin_login" value="1">
				<p class="message"></p> 
				<button type="button" class="btn btn-success login-btn">Sign In</button>
			</form>
		</div>

		<div class="overlay-container">
	      <div class="overlay">
	        <div class="overlay-panel overlay-left">
	          <h1>Berachad Store</h1>
	          <p>Login here by filling the info</p>
	          <button class="ghost" id="signIn">Sign In</button>
	        </div>

	        <div class="overlay-panel overlay-right">
	          <h1>Berachad Store</h1>
	          <p>Enter the details and start journey with us</p>
	          <button class="ghost" id="signUp">Sign Up</button>
	        </div>
	      </div>
	    </div>

 </div>
 <?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
  <script src="main.js"></script>

 </body>
</html>



