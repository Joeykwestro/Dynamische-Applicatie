<?php
	require('functions/connection.php');

	$query = 'SELECT name, health, attack, defense FROM characters';
	$sth = $dbh->prepare($query);
	$sth->execute();
	$result = $sth->fetchAll();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dynamische Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id='allcontainer'>
		<div id='header'>
			<img id='headerimg' src="images/header.jpg">
		</div>
		<div id='content'>
			<table id='tabel'>
				<tr>
					<th>Name</th>
					<th>Health</th>
					<th>Attack</th>
					<th>Defense</th>
				</tr>
				<?php 
					foreach($result as $rows){
				?>
				<tr>
					<td><?php echo $rows[0]; ?></td>
					<td><?php echo $rows[1]; ?></td>
					<td><?php echo $rows[2]; ?></td>
					<td><?php echo $rows[3]; ?></td>
				</tr>
				<?php 
					}
				 ?>

			</table>
		</div>
		<div id='footer'>
			<footer>©Joey Kwestro</footer>
		</div>
	</div>
</body>
</html>