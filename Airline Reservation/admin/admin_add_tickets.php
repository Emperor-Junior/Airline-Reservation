<?php

session_start();
if(!isset($_SESSION['name'])){
	header("location: ../index.php");
	exit();
}

$msg="";
if (isset($_POST['aircraft_id'])) {
	$aircraft_id = $_POST['aircraft_id'];
	$airplane_type = $_POST['airplane_type'];
	$noOfSeats = $_POST['noOfSeats'];
	// $bSeats = $_POST['bSeats'];
	// $eSeats = $_POST['eSeats'];
	include_once("../scripts/connect.php");
	$sql = mysql_query("INSERT INTO airlines(aircraftTypeID,airplane_type,total_number_of_seats) VALUES('$aircraft_id','$airplane_type','$noOfSeats')");
	$msg = "Success!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Flights</title>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/forms.css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="main_wrapper">
		<?php include_once 'templates/tmp_header.php'; ?>
		<?php include_once 'templates/tmp_nav.php'; ?>
		<section id="main_content">
			<h3>Add a new flight</h3>
			<br/>
			<form method="post" action="admin_add_tickets.php" enctype="multipart/form-data">
				<table width="100%" cellpaddin="3" cellspacing="3" border="0">
					<tr>
						<td align="right"><label>Aircraft Id</label></td>
						<td align="left"><input type="text" name="aircraft_id" class="text_input" maxlength="100"></td>
					</tr>
					<tr>
						<td align="right"><label>Airplane Type</label></td>
						<!-- <td align="left"><textarea name="airplane_type" style="border-radius:5px;font-family:arial;width:300px;height:80px;padding:6px;resize:none"></textarea></td> -->
						<td align="left"><input type="text" name="airplane_type" class="text_input" maxlength="100"></td>
					</tr>
					<tr>
						<td align="right"><label>Total Seats</label></td>
						<td align="left"><input type="text" name="noOfSeats" class="text_input" maxlength="100"></td>
					</tr>
					<!-- <tr>
						<td align="right"><label>Business Class Seats</label></td>
						<td align="left"><input type="text" name="bSeats" class="text_input" maxlength="100"></td>
					</tr>
					<tr>
						<td align="right"><label>Economy Seats</label></td>
						<td align="left"><input type="text" name="eSeats" class="text_input" maxlength="100"></td>
					</tr> -->
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Add Aircraft!"></td>
					</tr>
					<tr>
						<td align="center" colspan="2" font-weight="bold"><?php echo $msg; ?></td>
					</tr>
				</table>
			</form>
		</section>
		<?php include_once 'templates/tmp_main_aside.php'; ?>
	</div>
	<div>
		<?php include_once 'templates/tmp_footer.php'; ?>
	</div>
</body>
</html>