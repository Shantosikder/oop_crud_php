<?php include('database.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student List page</title>
</head>
<body>

	<?php 

	$result = $db->selectAll();

	//print_r($result);

	 ?>

	 <table border="1">
	 	
	 	<h1>Student Info Table::</h1>

	 	<tr>
	 		<th>ID</th>
	 		<th>First Name</th>
	 		<th>Last Name</th>
	 		<th>Gender</th>
	 		<th>Age</th>
	 		<th>Email</th>
	 	</tr>
	 	<?php 	while ($row = $result->fetch_object()): ?> 

	 		<tr>
	 			<td><?php echo $row->id; ?></td>
	 			<td><?php echo $row->first_name; ?></td>
	 			<td><?php echo $row->last_name; ?></td>
	 			<td><?php echo $row->gender; ?></td>
	 			<td><?php echo $row->age; ?></td>
	 			<td><?php echo $row->email_id; ?></td>
	 		</tr>

	 	<?php endwhile; ?>

	 	<tr>
	 		
	 	</tr>
	 </table>

</body>
</html>