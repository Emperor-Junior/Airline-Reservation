<?php

session_start();
if(isset($_SESSION['name'])){
	header("location: ../index.php");
	exit();
}

$msg="";
if (isset($_POST['submit'])) {
	// $aircraft_id = $_POST['aircraft_id'];
	// $airplane_type = $_POST['airplane_type'];
	// $noOfSeats = $_POST['noOfSeats'];
	// $bSeats = $_POST['bSeats'];
	// $eSeats = $_POST['eSeats'];
	// include_once("../scripts/connect.php");
	// $sql = mysql_query("INSERT INTO airlines(aircraftTypeID,airplane_type,total_number_of_seats) VALUES('$aircraft_id','$airplane_type','$noOfSeats')");
	$source = "../img/1.jpg";
		$img = '<img src="' . $source . '" width="200" border="1">';
		$msg .= '
			<div id="l_n">
				' . $img . '
			</div>
		';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Offers!</title>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<link rel="stylesheet" href="../css/white_black.css">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../img/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	#latest_news {
		width: 580px;
		/*border-top: 2px solid #333;*/
		padding-top: 20px;
	}
	#l_n {
		float: left;
		color: #000;
		font-size: 15px;
		/*width: 220px;*/
		padding: 10px;
		margin-bottom: 10px;
		margin-right: 20px;
		/*border: 1px solid #999;*/
	}
	#button {
	/*float: right;*/
	font-family: arial;
	font-weight: bold;
	text-align: center;
	margin-right: auto;
	margin-left: auto;
	background: #b3242a;
	color: #000;
	padding: 5px 8px 5px;
	border-radius: 5px;
	box-shadow: 50px;
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
						<a href="index.php">
							<img src="../img/ta.jpg" alt="" width="120" height="120" border="0">
						</a>
					</td>
					<td align="left">
						<a href="../index.php">
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
							<!-- <h3>Latest News!</h3> -->
						</aside>
					</td>
					<td valign="top">
						<section id="main_content">
							<div id="latest_news">
								<h3>Volar Alto!!!</h3>
								<!-- <h3>What's New??</h3> -->
								<?php echo "$msg"; ?>
							</div>
							<div id="l_n">
								<form method="post" action="offers.php" enctype="multipart/form-data">
									<p>Here are the best flight deals you can find ever! <input type="submit" name="submit" id="button" value="View more!"></p>
								</form>
							</div>
						</section>
					</td>
					<td valign="top">
						<aside id="right_side">
							<!-- id=cart_wrap -->
							<div id="booking_wrap">
								<!-- id=cart_header -->
								<div id="selected_tickets">
									<a href="../admin.php">Log In or Register</a>
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
			<!-- <p><b>Welcome to Texas Airlines! The No.1 Airline and Booking service in Texas, United States.</b><br/></p>
			<br>
			<p><b>With hubs at Dallas and Houston, Texas Aviation Services (TAS) was a "local service" airline in Texas and surrounding states. In August 1953 it operated scheduled flights to 36 airports from El Paso to Memphis. By May 1968 TAS flew to 48 U.S. airports plus Monterrey, Tampico and Veracruz in Mexico. The airline then changed its name to Texas Airlines and continued to grow.</b></p> -->
			<!-- <br>
			<p><b>When Texas Airlines was merged into <a href="http://en.wikipedia.org/wiki/Continental_Airlines">Continental Airlines</a> in 1982 it had grown to reach Baltimore, Colorado Springs, Denver, Fort Lauderdale, Hartford, Kansas City, Los Angeles, Mexico City, Milwaukee, Minneapolis/St. Paul, Omaha, Phoenix, St. Louis, Salt Lake City, Tucson and Washington D.C. with an all Douglas DC-9 jet fleet.</b></p> -->
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