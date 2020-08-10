<?php 
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME!</title>
	<?php include("header.php"); ?>
</head>
<body style="background: grey;">
	<p style="font-weight: 800; font-size: 70px; text-align: center; vertical-align: center; position: relative; top: 230px;">Welcome</p>
	<a href="logout.php" style="position: relative; left: 600px; top: 240px;"><button type="submit" class="btn btn-primary">SignOut</button></a>
</body>
</html>