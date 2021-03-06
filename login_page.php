<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
?>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		
		<div id="page-wrapper">
				<?php if(isset($_SESSION["name"])) echo '<h1 id="loginName" style="padding-bottom:0px; padding-right:40px; font-size:25px; text-align:right"> Hi, ' . $_SESSION["name"] . ' | ' . '<a href="logout.php">Log Out</a>' . '</h1>'; ?>
				<div id="header">
						
					<!-- Logo -->
						<h1 style="padding:0px; font-size:40px"><a href="index_page.php" id="logo">Pretty Patties<em></em></a></h1>
						
						<h1 style="padding:10px; font-size:15px"><a href="index_page.php" id="logo"><em>Putting the <strong>fun</strong> back in food</em></a></h1>
						
						<img style="padding:10px;" src=./images/hamburger3.png height="70" width="70"> </img>
						
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index_page.php">Home</a></li>
								<!--
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam sed tempus</a></li>
										<li>
											<a href="#">Submenu</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Phasellus magna</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>
								-->
								<li><a href="shop_page.php">Shop</a></li>
								<li><a href="aboutUs_page.php">About Us</a></li>
								<li><a href="contactUs_page.php">Contact Us</a></li>
								<?php if(!isset($_SESSION["name"])) echo '<li><a href="signUp_page.php">Sign Up</a></li>'; ?>
								<?php if(!isset($_SESSION["name"])) echo '<li class="current"><a href="login_page.php">Login</a></li>'; ?>
								<?php if(isset($_SESSION["name"])) echo '<li><a href="MemberIndex_page.php">Member Page</a></li>'; ?>
							</ul>
						</nav>

				</div>
				<!--Begin pasted text-->
			<div id="footer">
				<div class="row">			
					<section class="12u" style="padding-left:100px; padding-right:100px; padding-top:0px; padding-bottom:20px;">
						<h2>Log In</h2>
						<form action="login.php" method="post">
							<div class="row 50%">
								<div class="12u">
									<h1 align="left" style="padding:0px; font-size:20px">Email:</h1>
									<input type="email" name="Email" id="Email" placeholder="" required pattern="[a-zA-Z0-9\.]+[@]{1}[a-zA-Z]+\.[a-zA-Z]{2,6}" title="Input should be of a valid email form."/>
								</div>
								<div class="12u">
									<h1 align="left" style="padding:0px; font-size:20px">Password:</h1>
									<input type="password" name="Password" id="Password" placeholder="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
								</div>
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="button alt" value="Login" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>			
				</div>
		</div>
		<!--End pasted text -->
		<div class="form">
      
      </div><!-- tab-content -->
      
</div> <!-- /form -->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>