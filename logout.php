<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGOUT</title>
	<?php include("header.php"); ?>
</head>
<body>
	<p style="font-weight: 800; font-size: 40px; text-align: center;">YOU HAVE SUCCESSFULLY LOGOUT!</p>
	<a href="index.php"style="position: relative; left: 600px; top: 20px;"><button type="submit" class="btn btn-primary">Back</button></a>

</body>
</html>