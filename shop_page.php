<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!-- Bitcoin live tracker code provided by https://www.coindesk.com/price/bitcoin-price-ticker-widget/ -->
<?php
session_start();
?>
<html>
	
	<style>
	hr {
		margin: 20px 0;
		border: 1px solid #f00;
	}
	</style>
	
	<head>
		<title>Shop</title>
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
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>
								-->
								<li class="current"><a href="shop_page.php">Shop</a></li>
								<li><a href="aboutUs_page.php">About Us</a></li>
								<li><a href="contactUs_page.php">Contact Us</a></li>
								<?php if(!isset($_SESSION["name"])) echo '<li><a href="signUp_page.php">Sign Up</a></li>'; ?>
								<?php if(!isset($_SESSION["name"])) echo '<li><a href="login_page.php">Login</a></li>'; ?>
								<?php if(isset($_SESSION["name"])) echo '<li><a href="MemberIndex_page.php">Member Page</a></li>'; ?>
							</ul>
						</nav>
		
		<!-- Footer -->
		<div id="footer">
				<div class="row">			
					<section class="12u" style="padding-top:0px; padding-left:100px; padding-right:100px;">
						<h2>Limited-Edition Products</h2>
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/plaidPatty.jpg" alt="" /></a>
									<div class="inner">
										<h3>Plaid Patties</h3>
										<p>$9.99 USD</p>
										<?php 
										if(isset($_SESSION["name"])){
										echo '
										<p id="plaid">Error in Javascript</p>
										<form action="https://test.bitpay.com/checkout" method="post" >
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="qirB1JNjLtMG+AfKXIWK9pTnrg85iLeZhZXQswX8DzYTeR6qjdwQ/l2zfpmsPfo3Z+LH0RpxbB3fzAw3FvSXbbR1NnfmvEluBLkm9yh9hkqtTYuOG3ywWB9IiOflx1gfqQSXD953GVW98nWYFj0GT+xSy2ZNzwD5Fdz07D32fhxJ0OVkYJtDIWMW+kMhEMJb6qfCxfy7h9m5UWYGsZG/UZkbQJe4kQHp0iyGq13UDCTaDmJqp2LvD3Uwm0B+/z98Zn8SLQwSmox2gA/rheZYNQ==" />
											<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
										</form>
										';
										}
										?>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/redpattyReSized.png" alt="" /></a>
									<div class="inner">
										<h3>Red Patties</h3>
										<p>$4.99 USD</p>
										<?php 
										if(isset($_SESSION["name"])){
										echo '
										<p id="red">Error in Javascript</p>
										<form action="https://test.bitpay.com/checkout" method="post" >
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="qirB1JNjLtMG+AfKXIWK9pTnrg85iLeZhZXQswX8DzYTeR6qjdwQ/l2zfpmsPfo3UkCv3UXGxpAN463PJTD9zsrQl8BZhXkXn7aqvafUzqE+LzrocVpZ+l1L/H60L4vM+K6uTGMSFQi0krMHX2Ifxe8JNLUZ9KSTrr+Kng0OOyhxv0ivxrxgzyXy5Hp6ozZz4qOzDNdR2C1s6g/WOz10jfpMIPFG/atOmj9zOMEwcVGflBdxMXAOVFJlyc/hkeHcGSO110bmhGmmFuRXCEt1og==" />
											<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
										</form>
										'; 
										}
										?>
									</div>
								</div>
							</section>							
						</div>
						
						<div align="center">
							<h3 style="background: #2B2B2B; color: white;">Request a new color:</h3>
						</div>
		
						<form action="ColorEmail.php" method="post">
							<div class="row 50%">
								<div class="6u 12u(mobilep)">
									<?php
									if(isset($_SESSION["name"])){
										echo '<input type="hidden" name="fullname" id="fullname" value="'. $_SESSION["name"] .'" />';
									}
									else{
										echo '<input type="text" name="fullname" id="fullname" placeholder="Name" />';
									}
									?>
								</div>
								<div class="6u 12u(mobilep)">
									<?php
									if(isset($_SESSION["name"])){
										echo '<input type="hidden" name="emailaddress" id="emailaddress" value="'. $_SESSION["email"] .'" />';
									}
									else{
										echo '<input type="email" name="emailaddress" id="emailaddress" placeholder="Email" />';
									}
									?>
								</div>
							</div>
							<p></p>
							<p></p>
							Select your favorite color:
							&ensp;
								<input type="color" name="message" id = "message" value="#ff0000">							
							<p></p>
							<p></p>
							<div class="row 50%">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="button alt" value="Request Color" /></li>
									</ul>
								</div>
							</div>
						</form>
						
					</section>			
				</div>
		</div>

		<script type="text/javascript">			
			var HttpClient = function() {
				this.get = function(aUrl, aCallback) {
				var anHttpRequest = new XMLHttpRequest();
				anHttpRequest.onreadystatechange = function() { 
					if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
						aCallback(anHttpRequest.responseText);
					}

					anHttpRequest.open( "GET", aUrl, true );            
					anHttpRequest.send( null );
				}
			}
			
			var client = new HttpClient();
			client.get('https://blockchain.info/de/ticker', function(response) {
				const data = JSON.parse(response);
				value = data.USD.last;
				document.getElementById("plaid").innerHTML = (9.99 / value).toFixed(10).toString() + " BTC";
				document.getElementById("red").innerHTML =  (4.99 / value).toFixed(10).toString() + " BTC";
			});
		</script>
		
		<script>
			(function(b,i,t,C,O,I,N) {
				window.addEventListener('load',function() {
					if(b.getElementById(C))return;
					I=b.createElement(i),N=b.getElementsByTagName(i)[0];
					I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
				},false)
			})(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt-price');
		</script>
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>