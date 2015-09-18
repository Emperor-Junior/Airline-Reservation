<?php

session_start();
if(isset($_SESSION['name'])){
	header("location: ../index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Us</title>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../css/white_black.css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	#latest_news {
		float: left;
		font-family: arial;
		font-size: 35px;
		width: 580px;
		/*border-top: 2px solid #333;*/
		padding-top: 20px;
	}
	#l_n {
		float: left;
		width: 220px;
		padding: 10px;
		margin-bottom: 10px;
		margin-right: 20px;
		/*border: 1px solid #999;*/
	}
	</style>
</head>
<body>
	<div id="main_wrapper">	
		<header id="main_header">
				<!-- <a href="index.php" id="logo">
					<h1>TEXAS AIRLINES</h1>.
					<h2>You Name it, we serve it.</h2>
				</a> -->
			<table width="970" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="right">
						<a href="../index.php">
							<img src="../img/ta.jpg" alt="" width="120" height="120" border="0">
						</a>
					</td>
					<td align="left">
						<a href="index.php">
						<h1>Texas Airlines</h1></a><br/>
						<h2>Getting High Is My Job!</h2>
					</td>
				</tr>
			</table>
		</header>
		<nav id="main_menu">
			<a href="index.php">
				<div id="page">Home</div>
			</a>
			<a href="flight_search.php">
				<div id="page">Flights</div>
			</a>
			<!-- <a href="#">
				<div id="page">Booking</div>
			</a> -->
			<a href="offers.php">
				<div id="page">Flight Deals</div>
			</a>
			<a href="about.php">
				<div id="page">About Us</div>
			</a>
			<a href="contact.php">
				<div id="page">Contact Us</div>
			</a>
		</nav>
		<div id="content_wrapper">	
			<table cellpadding="0" cellspacing="0" border="0" width="1000">
				<tr>
					<td valign="top">
						<aside id="left_side">
							<h3>About Us</h3>
						</aside>
					</td>
					<td valign="top">
						<section id="main_content">
							<div id="latest_news">
								<br>
								<?php //echo "$latest_news"; ?>
							</div>
						</section>
					</td>
					<td valign="top">
						<aside id="right_side">
							<!-- id=cart_wrap -->
							<div id="booking_wrap">
								<!-- id=cart_header -->
								<div id="selected_tickets">
									<a href="admin.php">Log In or Register</a>
								</div>
								<!-- id=cart_body -->
								<div id="booked_tickets">
								</div>
							</div>
						</aside>
					</td>
				</tr>
			</table>
		</div>
		<div id="para_wrapper">
			<p><b>We are very proud to serve this nation with the most of our services.</b><br/></p>
			<br>
			<p><b>Texas Airlines Inc. is a United States airline, known from 1944 until 1947 as Aviation Enterprises, until 1969 as Texas Aviation Services Airways (TAS), and as Texas Airlines until 1982 when we merged with Continental Airlines. We are headquartered near William P. Hobby Airport (HOU) in Houston, Texas.</b></p>
			<br>
			<p><b>When Texas Airlines was merged into <a href="http://en.wikipedia.org/wiki/Continental_Airlines">Continental Airlines</a> in 1982 it had grown to reach Baltimore, Colorado Springs, Denver, Fort Lauderdale, Hartford, Kansas City, Los Angeles, Mexico City, Milwaukee, Minneapolis/St. Paul, Omaha, Phoenix, St. Louis, Salt Lake City, Tucson and Washington D.C. with an all Douglas DC-9 jet fleet.</b></p>
		</div>
	</div>
	<footer id="main_footer">
		<table align="center" width="100%" border="0" cellpadding="5" cellspacing="5">
			<tr>
				<td></td>
				<td><img src="../img/American-Express-icon.png" width="100" height="100"></td>
				<td><img src="../img/Discover-icon.png" width="100" height="100"></td>
				<td><img src="../img/paypal-icon.png" width="100" height="100"></td>
				<td><img src="../img/visa.png" width="100" height="100"></td>
				<td></td>
			</tr>
			<tr>
				<td align="center" colspan="6">
					<p>Copyright &copy; Texas Airlines 2015. All rights reserved. <a href="privacy.php">Privacy Policy.</a> <a href="terms.php">Terms & Conditions.</a></p>
				</td>
			</tr>
		</table>
	</footer>
</body>
</html>