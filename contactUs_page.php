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
		<title>Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		
		<div id="page-wrapper">
				<?php if(isset($_SESSION["name"])) echo '<p id="loginName" style="padding:0px; padding-right:40px; font-size:25px; text-align:right"> Hi, ' . $_SESSION["name"] . '</p>'; ?>
			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1 style="padding:0px; font-size:40px"><a href="index_page.php" id="logo">Pretty Patties<em></em></a></h1>
						<h1 style="padding:0px; font-size:15px"><a href="index_page.php" id="logo"><em>Putting the <strong>fun</strong> back in food</em></a></h1>
						<img src=./images/hamburger3.png height="50" width="50"> </img>
						
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
								<li class="current"><a href="contactUs_page.php">Contact Us</a></li>
								<li><a href="signUp_page.php">Sign Up</a></li>
								<li><a href="login_page.php">Login</a></li>
							</ul>
						</nav>
		
		<!-- Footer -->
		<div id="footer">
				<div class="row">			
					<section class="12u" style="padding-top:0px; padding-left:100px; padding-right:100px;">
						<h2>Get In Touch</h2>
						<form action="sendEmail.php" method="post">
							<div class="row 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="fullname" id="fullname" placeholder="Name" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="emailaddress" id="emailaddress" placeholder="Email" />
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="button alt" value="Send Message" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>			
				</div>
		</div>
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>