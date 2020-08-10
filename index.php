// Declaring and hoisting the variables 
<?php
	$firstname="";
	$secondname="";
	$email="";
	$dateofbirth="";
	$favoritecolor="";
	$gender="";
	$department="";
	$password="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		require'config.php';
		if(empty($email=$_POST['firstname'] && $email=$_POST['secondname'] && $email=$_POST['email'] && $email=$_POST['password'] && $email=$_POST['dateofbirth'] && $email=$_POST['favoritecolor'] && $email=$_POST['gender'] && $email=$_POST['department'] && $email=$_POST['password'])){
			echo "<p style=\"color:red;\">couldnt submit an empty form...</p>";
			header("Location:index.php");
			exit();
		}
		else{
			$firstname=$_POST['firstname'];
			$secondname=$_POST['secondname'];
			$email=$_POST['email'];
			$dateofbirth=$_POST['dateofbirth'];
			$favoritecolor=$_POST['favoritecolor'];
			$gender=$_POST['gender'];
			$department=$_POST['department'];
			$password=$_POST['password'];
			$phash = password_hash($password, PASSWORD_DEFAULT);

			//$mysqli= $conn->prepare("INSERT INTO users (fullname, track,email,password) VALUES (?, ?, ?, ?)");
			//$mysqli->bind_param('ssss', $fullname, $track, $email, $phash);
			//$mysqli->execute();

			header("Location:login.php");
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<?php include("header.php"); ?>
</head>
<body>
	<style type="text/css">
		body{
			background: #C0C0C0;
			color: black;
		}
		.register{
			position: fixed;
			top: 100px;
			left: 40%;
		}
	</style>
	<div class="register">
		<form method="POST" action="index.php">
			<div class="form-group">
				<label for="firstname">First Name<span style="color: red;">*</span></label>
				<input type="text" class="form-control" id="fullname" name="firstname" value="<?php print($firstname) ?>" required>
			</div>
			<div class="form-group">
				<label for="secondname">Second Name</label>
				<input type="text" class="form-control" id="secondname" name="secondname" value="<?php print($secondname) ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address<span style="color: red;">*</span></label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php print($email) ?>" required>
			</div>

		<div class="form-group">
			<label for="dateofbirth">dateofbirth<span style="color: red;">*</span></label>
		 <tr>
		    <td>Select your Date of Birth</td>
		    <td>
				<select name="mm">
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option value='$i'>".$i."</option>";
					}
					?>
				</select>
				<select name="dd">
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option value='$i'>".$i."</option>";
					}
					?>
				</select>
				<select name="yy">
					<option value="">Year</option>
					<?php 
					for($i=1900;$i<=2015;$i++)
					{
					echo "<option value='$i'>".$i."</option>";
					}
					?>
				</select>
			</td>
		  </tr>
		  			<input type="date" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php print($dateofbirth) ?>" required>
			</div>

			<div class="form-group">
				<label for="favcolor">Select your favorite color:</label>
				<input type="color" id="favcolor" name="favcolor" value="#ff0000 <?php print($favoritecolor) ?>" required>
			</div>
			<div class="form-group">
				<label for="gender">gender<span style="color: red;">*</span></label>
				<td>
			Male<input type="radio" name="g" value="m"/>
			Female<input type="radio" name="g" value="f
			</td> <?php print($gender) ?>" required>
			</div>
			<div class="form-group">
			<label for="department">Select your Department:</label>
			<option value= IT> IT </option>
			<option value= HR> HR </option>
			<option value= DataScience> DataScience </option>
			<option value= Communication> Communication </option>
			<input type="text" class="form-control" id="department" name="department" value="<?php print($department) ?>" required>
			</div>

			<div class="form-group">
				<label for="password">Password<span style="color: red;">*</span></label>
			    <input type="password" class="form-control" id="password" name="password" value="<?php print($password) ?>" required>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
			<p>Already a user? <a href="login.php">Login Here</a></p>
		</form>
	</div>
</body>
</html>

