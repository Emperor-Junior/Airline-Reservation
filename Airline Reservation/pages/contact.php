<?php

$style = "";
include_once("../scripts/connect.php");
// $sql = mysql_query("SELECT * FROM site_style WHERE status='1' LIMIT 1");
// while ($row = mysql_fetch_array($sql)) {
// 	$style = $row["name"];
// }

$msg_error = "";
if (isset($_POST['msg_name'])) {
	$msg_name = $_POST['msg_name'];
	$msg_email = $_POST['msg_email'];
	$msg_subject = $_POST['msg_subject'];
	$msg_message = $_POST['msg_message'];
	/////////////////////////////////////
	$msg_name = strip_tags($msg_name);
	$msg_email = strip_tags($msg_email);
	$msg_subject = strip_tags($msg_subject);
	$msg_message = strip_tags($msg_message);
	//////////////////////////////////////
	$msg_name = stripslashes($msg_name);
	$msg_email = mysql_real_escape_string($msg_email);
	$msg_subject = stripslashes($msg_subject);
	$msg_message = stripslashes($msg_message);
	if ((!$msg_message) || (!$msg_subject) || (!$msg_email) || (!$msg_name)) {
		$msg_error = "<p style='color: #b3242a; font-weight: bold; font-family: arial; font-size: 18px;'>Please fill all the fields!</p>";
	} else {
	include_once("../scripts/connect.php");
	$sql = mysql_query("INSERT INTO messages(msg_name, msg_email, msg_subject, msg_message, msg_date) VALUES('$msg_name','$msg_email','$msg_subject','$msg_message', now())");
	$msg_error = "<p style='color: #000; font-weight: bold; font-family: arial; font-size: 16px;'>Thank You $msg_name for contacting us. We will return to you shortly!";
	}
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Contact Us</title>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<link rel="stylesheet" href="../css/white_black.css">
	<link rel="stylesheet" href="../admin/css/forms.css">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../img/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	</style>
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
							<h4 class="page_title">Contact Us</h4>
							<br>
							<form action="contact.php" method="post" enctype="multipart/form-data">
								<table width="100%" cellpaddin="3" cellspacing="3" border="0">
									<tr>
										<td align="left"><label>Full Name</label></td>
										<td align="left"><input type="text" name="msg_name" class="text_input" maxlength="100"></td>
									</tr>
									<tr>
										<td align="left"><label>Email Address</label></td>
										<!-- <td align="left"><textarea name="airplane_type" style="border-radius:5px;font-family:arial;width:300px;height:80px;padding:6px;resize:none"></textarea></td> -->
										<td align="left"><input type="email" name="msg_email" class="text_input" maxlength="80"></td>
									</tr>
									<tr>
										<td align="left"><label>Subject</label></td>
										<td align="left"><input type="text" name="msg_subject" class="text_input" maxlength="50"></td>
									</tr>
									<tr>
										<td align="left"><label>Message</label></td>
										<td align="left">
											<textarea name="msg_message" style="border-radius:5px;font-family:arial;width:300px;height:100px;padding:6px;resize:none">
											</textarea>
										</td>
									</tr>
									<tr>
										<td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Send it"></td>
									</tr>
									<tr>
										<td align="center" colspan="2" font-weight="bold"><?php echo $msg_error; ?></td>
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