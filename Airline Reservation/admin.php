<?php

session_start();
if(isset($_SESSION['admin'])){
	header("location: admin/index.php");
	exit();
}

$msg = "";
if (isset($_POST['username'])) {
	$admin = $_POST['username'];
	$password = $_POST['password'];
	$admin = stripslashes($admin);
	$password = stripslashes($password);
	$admin = strip_tags($admin);
	$password = strip_tags($password);
	if ((!$admin) || (!$password)) {
		$msg = "<p style='color: #c00; font-weight: bold;'>Please fill in all the fields!</p>";
	}else {
		$admin = mysql_real_escape_string($admin);
		$password = md5($password);
		include_once ("scripts/connect.php");
		$sql = mysql_query("SELECT * FROM admin WHERE name='$admin' AND password='$password' LIMIT 1");
		$count = mysql_num_rows($sql);
		if ($count > 0) {
			while ($row = mysql_fetch_array($sql)) {
				$s_id = $row['id'];
				$s_name = $row['name'];
				$s_pass = $row['password'];
				$_SESSION['id'] = $s_id;
				$_SESSION['name'] = $s_name;
				$_SESSION['password'] = $s_pass;
				mysql_query("UPDATE admin SET last_log=now() WHERE name='$s_name' LIMIT 1");
				header("location: admin/index.php");
			}
		}else {
			$msg = "<p style='color: #c00; font-weight: bold;'>Wrong username or password!</p>";
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Log In</title>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<style type="text/css">
	body {
		color: #000;
		background-image: url("img/bg.jpg");
		background-size: 1600px 1000px;
    	background-repeat: no-repeat;
		/*width: 100%;*/
		/*background: #06f;*/
	}
	#main_wrapper {
		width: 400px;
		padding: 15px;
		margin: 100px auto;
		/*background: #3b5998;*/
		border-radius: 8px;
	/*	-webkit-border-radius: 8px;
		-moz-border-radius: 8px;*/
		box-shadow: #080808 5px 5px 15px;
	}

	.text_input {
		float: right;
		border-radius: 4px;
		width: 150px;
		padding: 5px;
	}

	#button {
		float: right;
		font-family: arial;
		font-weight: bold;
		text-align: center;
		/*margin-right: auto;*/
    	/*margin-left: auto;*/
    	background: #5cb85c;
    	color: #ccc;
		padding: 5px 8px 5px;
		border-radius: 5px;
	}

	h2 {
		float: right;
		color: #ccc;
		font-family: arial, geneva, sans-serif;
		font-size: 24px;
	}

	label {
		float: right;
		color: #ccc;
		font-family: arial;
		font-weight: bold;
	}

	</style>
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="main_wrapper">
		<form action="admin.php" method="post" enctype="multipart/form-data">
			<table width="80" cellpadding="3" cellspacing="3" border="0">
				<tr>
					<td align="center" colspan="2"><h2>Admin Log In</h2></td>
				</tr>
				<tr>
					<td align="right"><label>Username</label></td>
					<td align="left"><input type="text" name="username" class="text_input" maxlength="20"></td>
				</tr>
				<tr>
					<td align="right"><label>Password</label></td>
					<td align="left"><input type="password" name="password" class="text_input" maxlength="20"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Log In"></td>
					<td align="center" colspan="2"><input type="submit" name="signUp" id="button" value="Sign Up!"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><?php echo $msg; ?></td>
				</tr>
			</table>
		</form>
	</div>
	<div>
		<footer>
			<p>Copyright &copy; Texas Airlines 2015. All rights reserved. <a href="privacy.php">Privacy Policy.</a> <a href="terms.php">Terms & Conditions.</a></p>
		</footer>
	</div>
</body>
</html>