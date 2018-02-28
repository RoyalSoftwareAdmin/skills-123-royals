<!--
Author: Madhusudhana R K
Author URL: http://www.royalsoftwaresolution.com

License: Licence owned by Royal Softwares

License URL: http://www.royalsoftwaresolution.com/docs/licence.pdf

-->
<?php 
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("Location: login.php");
	}
	
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Royal Skills Master  | Login Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Royal Skills Master Responsive web application, Know your skills, More skills test, know where you deserve in IT industry, Best experienced remarks" />
	<meta name="description" content="Royal Skills master  is the first and best platform to analyze your technical, analytical, logical, verbal, CA, GK , and so on skills. This is AI platform which read data from your input and present your skills output in data visusalization form. This helps Job aspirantas in IT industry , Govt sector , Non-Technical jobs and improve your skills set." />  
	<meta property="og:url"           content="https://www.royalsoftwaresolution.com" />
	  <meta property="og:type"          content="website" />
	  <meta property="og:title"         content="Royal Softwares" />
	  <meta property="og:description"   content="Royal Softwares is the  best software company in mysore." />
	  <meta property="og:image"         content="http://www.royalsoftwaresolution.com/wp-content/uploads/2018/01/mysexpo-12.png" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="js/common/common.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/modules/signup.css">

	</head> 
	<body class="cbp-spmenu-push">
		<div class="main-content">
			<!-- main content start-->
			<div id="page-wrapper">
				<div class="main-page login-page ">
					<h2 class="title1">Login</h2>
					<div class="widget-shadow">
						<div class="login-body">
							<input type="email" class="user" id="email" name="email" placeholder="Enter Your Email" >
							<input type="password" name="password" id="password" class="lock" placeholder="Password" >
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>								
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u error"></div>
							<input type="button" id="submit" name="Sign In" value="Sign In">
							<div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!--footer-->
			<div class="footer">
			   <p>&copy; 2018 Royal Softwares. All Rights Reserved | Design by <a href="http://www.royalsoftwaresolution.com/" target="_blank">Royal Softwares </a></p>		
			</div>
		    <!--//footer-->
		</div>
	   <script src="js/bootstrap.js"> </script>
	   <script type="text/javascript" src="js/modules/login.js"></script>
	</body>
</html>