<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	
	https://stackoverflow.com/questions/3518002/how-can-i-set-the-default-value-for-an-html-select-element
	http://www.the-art-of-web.com/html/html5-form-validation/
-->
<?php
session_start();
?>
<html>
	<head>
		<title>Sign Up</title>
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
								<li><a href="shop_page.php">Shop</a></li>
								<li><a href="aboutUs_page.php">About Us</a></li>
								<li><a href="contactUs_page.php">Contact Us</a></li>
								<li class="current"><a href="signUp_page.php">Sign Up</a></li>
								<?php if(!isset($_SESSION["name"])) echo '<li><a href="login_page.php">Login</a></li>'; ?>
								<?php if(isset($_SESSION["name"])) echo '<li><a href="MemberIndex_page.php">Member Page</a></li>'; ?>
							</ul>
						</nav>

				</div>
				<!--Begin pasted text-->
			<div id="footer">
				<div class="row">			
					<section class="12u" style="padding-left:100px; padding-right:100px; padding-top:0px; padding-bottom:10px;">
						<h2>Sign Up</h2>
						<form action="createNewSignUp.php" method="post">
							<div class="row 50%">
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">First Name:</h1>
									<input type="text" name="FirstName" id="FirstName" placeholder="" required pattern="[A-Za-z]+" title="Input should only contain letters."/>
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">Last Name:</h1>
									<input type="text" name="LastName" id="LastName" placeholder="" required pattern="[A-Za-z]+" title="Input should only contain letters."/>
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">Email Address:</h1>
									<input type="email" name="Email" id="Email" placeholder="" required pattern="[a-zA-Z0-9\.]+[@]{1}[a-zA-Z]+\.[a-zA-Z]{2,6}" title="Input should be of a valid email form."/>
									<!--
									required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"
									-->
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">Password:</h1>
									<input type="password" name="Password" id="Password" placeholder="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">Address:</h1>
									<input type="text" name="Address" id="Address" placeholder="" required pattern="[0-9 \.]+[A-Za-z\.]+[A-Za-z0-9 \.]*" title="Input should only contain letters,numbers, and a period."/>
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">City:</h1>
									<input type="text" name="City" id="City" placeholder="" required pattern="[A-Za-z ]+" title="Input should only contain letters."/>	
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">State:</h1>
									<select type="text" name="State" id="State" placeholder="" required pattern="">
										<option value="" selected disabled hidden></option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select> 
								</div>
								<div class="12u" style="padding-bottom:0px; padding-top:0px;">
									<h1 align="left" style="padding:0px; font-size:20px">Zip Code:</h1>
									<input type="text" name="Zip" id="Zip" placeholder="" required pattern="[0-9]{5}" title="Input should only contain five numbers."/>
								</div>
								<div class="12u" align="center">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button alt" value="Sign-up" /></li>
										</ul>
									</div>
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