<?php include ('database.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Entry</title>
</head>
<body>

	<?php 	
	if(isset($_POST['submit'])){
		extract($_POST);
		if($db->insert($first,$last,$gender,$age,$email)){
			echo "<h3>success<h3>";
		}else{
			echo "<h3>Error<h3>";
		}
	}
	//$result = $db->insert();
	 ?>

	<center>
		<form method="post" action="">
		<h1>New Student Entry::</h1>
		<label>First Name:</label>
		<input type="text" name="first" placeholder="Enter your First name"><br><br>

		<label>Last Name:</label>
		<input type="text" name="last" placeholder="Enter your Last name"><br><br>

		<label>Gender:</label>
		<input type="text" name="gender" placeholder="Enter your Gender" ><br><br>
		
		<label>Age:</label>
		<input type="text" name="age" placeholder="Enter your Age"><br><br>

		<label>Email:</label>
		<input type="text" name="email" placeholder="Enter your Email"><br><br>

		<input type="submit" name="submit" value="SUBMIT">

	</form>
	</center>

</body>
</html>