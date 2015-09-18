<?php

session_start();
if(!isset($_SESSION['name'])){
	header("location: ../index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Home</title>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="main_wrapper">
		<?php include_once 'templates/tmp_header.php'; ?>
		<?php include_once 'templates/tmp_nav.php'; ?>
		<section id="main_content">
			<br/>
			<br/>
			<br/>
		</section>
		<?php include_once 'templates/tmp_main_aside.php'; ?>
	</div>
	<div>
		<?php include_once 'templates/tmp_footer.php'; ?>
	</div>
</body>
</html>