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
		<title>About Us</title>
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
								-->
								<li><a href="shop_page.php">Shop</a></li>
								<li class="current"><a href="aboutUs_page.php">About Us</a></li>
								<li><a href="contactUs_page.php">Contact Us</a></li>
								<?php if(!isset($_SESSION["name"])) echo '<li><a href="signUp_page.php">Sign Up</a></li>'; ?>
								<?php if(!isset($_SESSION["name"])) echo '<li><a href="login_page.php">Login</a></li>'; ?>
								<?php if(isset($_SESSION["name"])) echo '<li><a href="MemberIndex_page.php">Member Page</a></li>'; ?>
							</ul>
						</nav>

				</div>
				
				<div style="width:100%; text-align:center">
					<img src="images/allColors.png" height="411" width="640" style="padding-top: 25px; padding-bottom:25px;"/>
				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>About Us</h2>
										<p>Pretty Patties: Putting the fun back in food</p>
									</header>

									<p>Pretty Patties is designed to bring color and life to our daily food choices. We're trying to provide an affordable food
									product that gets people excited about eating. The Pretty Patty is made using only <strong>the finest ground beef: grass fed, no added 
									antibiotics, no added growth hormones</strong>. We do this to ensure that we maintain the higher standards of production that help the
									environment and create a sustainable operation that we can be proud of. Pretty Patties holds animal rights values near and dear
									to our hearts. All of our cows are sourced from farms where the cows are allowed to live and feed on the land just as they did
									100 years ago. We believe that the way the animals are treated is translated into the food we eat and want to maintain a positive
									energy in our Pretty Patties to keep the customer, and ourselves, <strong>happy and satisfied</strong>.</p>
																	
									
									<h3>Potential Customers</h3>
									<p>We'd like to display the Pretty Patties to everyone in America by placing our products on the shelves of grocery stores
									across the country. The <strong>fun</strong> nature of the Pretty Patty makes it a great meal for people of all ages and with the health conscious
									decisions of our production team, everyone can enjoy a Pretty Patty knowing the animals were treated humanely. By providing the 
									Pretty Patty frozen, we hope to provide ease of use to the consumer and supply them <strong>a healthier option for anytime eating</strong>.</p>

									
									<h3>Our Proposition</h3>
									<p>The Unique nature of the Pretty Patty in that it's <strong>a delicious, healthy, frozen food option</strong> puts it in a class all it's own.
									There aren't many products like ours in the frozen food aisle at your local grocery store, so we're hoping that our product
									will be a big seller on the shelves at stores across the country. Our philosophy behind <strong>"Putting the fun back in food"</strong> is to
									liven up the food on our plates and get people excited about eating. Too many times people look at their plate and find it 
									uninteresting and unsatisfying, but we're looking to provide a whole new product that changes the way people view eating.</p>

									<div style="width:100%; text-align:center; padding:0px;"><img src="images/cow.jpg" height="150" width="q50"/></div>
								</article>

						</div>
					</div>
				</section>

		</div>
		
		<!-- Footer -->
		<!--
		<div id="footer">
				<div class="row">					
					<section class="3u 6u$(narrower) 12u$(mobilep)">
						<h3>More Links to Stuff</h3>
						<ul class="links">
							<li><a href="#">Duis neque nisi dapibus</a></li>
							<li><a href="#">Sed et dapibus quis</a></li>
							<li><a href="#">Rutrum accumsan sed</a></li>
							<li><a href="#">Mattis et sed accumsan</a></li>
							<li><a href="#">Duis neque nisi sed</a></li>
							<li><a href="#">Sed et dapibus quis</a></li>
							<li><a href="#">Rutrum amet varius</a></li>
						</ul>
					</section>
					
					<section class="6u 12u(narrower)">
						<h3>Get In Touch</h3>
						<form>
							<div class="row 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="email" id="email" placeholder="Email" />
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
		-->

		<div style="width:100%; text-align:center; padding-top:25px; padding-bottom:25px;">
			<a href="shop_page.php" class="button">Purchase</a>
			<a href="signUp_page.php" class="button">Sign Up Now</a>
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