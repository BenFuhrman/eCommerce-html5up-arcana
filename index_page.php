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
		<title>Pretty Patties</title>
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
								<li class="current"><a href="index_page.php">Home</a></li>
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
								<li><a href="signUp_page.php">Sign Up</a></li>
								<li><a href="login_page.php">Login</a></li>
								<?php if(isset($_SESSION["name"])) echo '<li><a href="MemberIndex_page.php">Member Page</a></li>'; ?>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Pretty Patties: <em>Food re-imagined.</em></h2>
						<a href="aboutUs_page.php" class="button">Learn More</a>
					</header>
				</section>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<!--
									<i class="icon major fa-paper-plane"></i>
									<a href="#" class="icon major left"><img src="images/fastest delivery.png" alt=""/></a>									
									<a href="#" class="icon major left"><img src="images/freshest food.png" alt="" /></a>									
									<a href="#" class="icon major left"><img src="images/prettiest patties.png" alt="" /></a>
									-->
									<i class="icon major fa-truck"></i>
									<h3>The Fastest Delivery</h3>
									<p>Overnight shipping anywhere on the East Coast.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-cutlery"></i>
									<h3>The Freshest Food</h3>
									<p>Quickest farm to patty, guaranteed.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-child"></i>
									<h3>And the Prettiest Patties</h3>
									<p>Find a better looking burger, I dare you.</p>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading -->
					<div class="container">
						<header class="major">
							<h2 style="color: #512184;">COLORFUL</h2>
							<p>Because life is better in color</p>
						</header>
					</div>

			<!-- Posts -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/plaidPatty.jpg" alt="" /></a>
									<div class="inner">
										<h3>Plaid Patties</h3>
										<p>Pretty patties are no longer confined only to single colors.  (Imagine how limiting that would be.)  Pretty patties are now available in more complex patterns, including plaid!</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/redefining red meat.jpg" alt="" /></a>
									<div class="inner">
										<h3>Redefining Red Meat</h3>
										<p>When most patty wholesalers say they sell red meat, they mean brown.  Here at Pretty Patties, we sell red meat that's really red- even when it's cooked.</p>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/make a masterpiece.png" alt="" /></a>
									<div class="inner">
										<h3>Make a Masterpiece</h3>
										<p>You can now customize your own patties for pickup at your local grocery market.  If you place an order with our company through Amazon, patties can be ready for pickup in your local Whole Foods in as little as 24 hours with Prime!</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/make summer memorable.png" alt="" /></a>
									<div class="inner">
										<h3>Make Summer Memorable</h3>
										<p>These are the summers you will remember.  How much more memorable will it be with colorful patties?</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</section>

			
			<!-- Footer -->
			<!--
				<div id="footer">
					<div class="container">
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

				</div>
		-->
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