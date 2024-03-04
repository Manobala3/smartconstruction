<?php
include("db.php");

$sql = "SELECT * FROM `users`";
$res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.min.js"></script>
	<title>Table search</title>
	<style type="text/css">
		table,th,td{
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<form action="search.php" method="POST">
		<input type="text" name="search" id="search">
		<input type="submit" name="submit">
	</form>
	
 <table>
 	<tr>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Password</th>
 	</tr>
 	<tbody>
 		<?php
 	while ($row = mysqli_fetch_assoc($res)){
		$name = $row['name'];
		$email = $row['email'];
		$pass = $row['password'];
		echo'
		<tr>
		<td>'.$name.'</td>
		<td>'.$email.'</td>
		<td>'.$pass.'</td>
		</tr>
		';
	}
	?>
 	</tbody>
 	
 </table>
 
</body>
</html>