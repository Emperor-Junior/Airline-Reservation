<?php

session_start();
if(isset($_SESSION['name'])){
	header("location: ../index.php");
	exit();
}

$msg="";
$value1="";
$value2="";
if (isset($_POST['departure_airport_code'])) {
	$departure_airport_code = $_POST['departure_airport_code'];
	$arrival_airport_code = $_POST['arrival_airport_code'];
	///////////////////////////////////
	$departure_airport_code = strip_tags($departure_airport_code);
	$arrival_airport_code = strip_tags($arrival_airport_code);
	///////////////////////////////////
	$departure_airport_code = stripslashes($departure_airport_code);
	$arrival_airport_code = stripslashes($arrival_airport_code);
	//////////////////////////////////
	if ((!$departure_airport_code) || (!$arrival_airport_code)) {
		$msg = "<p style='color: #b3242a; font-weight: bold; font-family: arial; font-size: 18px;'>Please fill all the fields!</p>";
	} else {
	include_once("../scripts/connect.php");
	$sql = mysql_query("SELECT * FROM flight WHERE flight_number IN (SELECT flight_number FROM flight_leg WHERE arrival_airport_code = '$arrival_airport_code' OR departure_airport_code = '$departure_airport_code')");
	$count = mysql_num_rows($sql);
	if ($count > 0) {
		while ($row = mysql_fetch_array($sql)) {
			$flight_number = $row["flight_number"];
			$weekdays = $row["weekdays"];
			$value1 = "<p style='padding-top: 10px; color: #000; font-weight: bold; font-family: arial; font-size: 16px;'>Flight Details</p>";
			// $value2 = "Weekday";
			$msg .= "<p style='padding-top: 10px; color: #333; font-weight: bold; font-family: arial; font-size: 16px;'>$flight_number | $weekdays <br/></p>";
		}
	} else {
		$msg = "<p style='padding-top: 10px; color: #b3242a; font-weight: bold; font-family: arial; font-size: 18px;'>Oops! No flights for the Departure Code</p>";
	}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Flight Search</title>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<link rel="stylesheet" href="../css/white_black.css">
	<link rel="stylesheet" href="../admin/css/forms.css">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../img/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="main_wrapper">
		<header id="main_header">
			<table width="970" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="right">
						<a href="index.php">
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
			<a href="../index.php">
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
							<!-- <h3>Search Your Flight</h3> -->
						</aside>
					</td>
					<td valign="top">
						<section id="main_content">
							<h4 class="page_title">Search Your Flight!</h4>	
							<br>
							<form method="post" action="flight_search.php" enctype="multipart/form-data">
								<table width="100%" cellpaddin="3" cellspacing="3" border="0">
									<tr>
										<td align="left" font-weight="bold"><label>Departure Airport Code</label></td>
										<td align="left"><input type="text" name="departure_airport_code" class="text_input" ></td>
									</tr>
									<tr>
										<td align="left" font-weight="bold"><label>Arrival Airport Code</label></td>
										<!-- <td align="left"><textarea name="airplane_type" style="border-radius:5px;font-family:arial;width:300px;height:80px;padding:6px;resize:none"></textarea></td> -->
										<td align="left"><input type="text" name="arrival_airport_code" class="text_input" maxlength="50"></td>
									</tr>
									<!-- <tr>
										<td align="right"><label>Total Seats</label></td>
										<td align="left"><input type="text" name="noOfSeats" class="text_input" maxlength="100"></td>
									</tr> -->
									<!-- <tr>
										<td align="right"><label>Business Class Seats</label></td>
										<td align="left"><input type="text" name="bSeats" class="text_input" maxlength="100"></td>
									</tr>
									<tr>
										<td align="right"><label>Economy Seats</label></td>
										<td align="left"><input type="text" name="eSeats" class="text_input" maxlength="100"></td>
									</tr> -->
									<tr>
										<td align="center" colspan="5" font-weight="bold"><input type="submit" name="submit" id="button" value="Search"></td>
									</tr>
									<tr>
										<td align="center" colspan="5" font-weight="bold"><?php echo $value1; ?></td>
										<!-- <td align="center" colspan="5" font-weight="bold"><?php echo $value2; ?></td> -->
										<!-- <td align="center" font-weight="bold"><label>Flight Number</label></td>
										<td align="center" font-weight="bold"><label>Weekday</label></td> -->
									</tr>
									<tr>
										<td align="center" colspan="5" font-weight="bold"><?php echo $msg; ?></td>
									</tr>
								</table>
							</form>
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
	</footer>>
</body>
</html>