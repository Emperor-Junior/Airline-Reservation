<?php

$style = "";
include_once("scripts/connect.php");
// $sql = mysql_query("SELECT * FROM site_style WHERE status='1' LIMIT 1");
// while ($row = mysql_fetch_array($sql)) {
// 	$style = $row["name"];
// }
$latest_news = "";
$sql2 = mysql_query("SELECT * FROM leg_instance ORDER BY departure_time ASC LIMIT 2");
$count = mysql_num_rows($sql2);
if ($count > 0) {
	while ($row = mysql_fetch_array($sql2)) {
		$flight_number = $row['flight_number'];
		$leg_number = $row['leg_number'];
		$departure_time = $row['departure_time'];
		$departure_airport_code = $row['departure_airport_code'];
		$arrival_airport_code = $row['arrival_airport_code'];
		$source = "img/$flight_number.jpg";
		$img = '<img src="' . $source . '" width="200" border="1">';
		$latest_news .= '
			<div id="l_n">
				' . $img . '
				<p>Flight No :
				' . $flight_number . '</p>
				<p>Dep Time : 
				' . $departure_time . '</p>
			</div>
		';
	}
} else {
	$latest_news = '<p>No Latest News at this moment!!!</p>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Texas Airlines</title>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<link rel="stylesheet" href="css/white_black.css">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	#latest_news {
		width: 580px;
		border-top: 2px solid #333;
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
		<?php include_once("templates/tmp_header.php"); ?>
		<?php include_once("templates/tmp_navigation.php"); ?>
		<div id="content_wrapper">	
			<table cellpadding="0" cellspacing="0" border="0" width="1000">
				<tr>
					<td valign="top">
						<?php include_once("templates/tmp_left_aside.php"); ?>
					</td>
					<td valign="top">
						<section id="main_content">
							<div id="latest_news">
								<h3>Latest News about Upcoming Flights!</h3>
								<?php echo "$latest_news"; ?>
							</div>
						</section>
					</td>
					<td valign="top">
						<?php include_once("templates/tmp_right_aside.php"); ?>
					</td>
				</tr>
			</table>
		</div>
		<div id="para_wrapper">
			<p><b><br>Welcome to Texas Airlines! The No.1 Airline and Booking service in Texas, United States.</b><br/></p>
			<br>
			<p><b>With hubs at Dallas and Houston, Texas Aviation Services (TAS) was a "local service" airline in Texas and surrounding states. In August 1953 it operated scheduled flights to 36 airports from El Paso to Memphis. By May 1968 TAS flew to 48 U.S. airports plus Monterrey, Tampico and Veracruz in Mexico. The airline then changed its name to Texas Airlines and continued to grow.</b></p>
			<!-- <br>
			<p><b>When Texas Airlines was merged into <a href="http://en.wikipedia.org/wiki/Continental_Airlines">Continental Airlines</a> in 1982 it had grown to reach Baltimore, Colorado Springs, Denver, Fort Lauderdale, Hartford, Kansas City, Los Angeles, Mexico City, Milwaukee, Minneapolis/St. Paul, Omaha, Phoenix, St. Louis, Salt Lake City, Tucson and Washington D.C. with an all Douglas DC-9 jet fleet.</b></p> -->
		</div>
	</div>
	<?php include_once("templates/tmp_footer.php"); ?>
</body>
</html>