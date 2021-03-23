<?php
	require('functions/connection.php');

	$query = 'SELECT name, health, attack, defense FROM characters ORDER BY name';
	$sth = $dbh->prepare($query);
	$sth->execute();
	$result = $sth->fetchAll();

	$query2 = 'SELECT COUNT(name) FROM characters';
	$sth2 = $dbh->prepare($query2);
	$sth2->execute();
	$qty = $sth2->fetch();

	$count = 0;
	$check = false;
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
			<?php
				if(!$check){
			?>
			<table id='tabel'>
				<tr>
					<th>Name (<?php echo $qty[0];?>)</th>
					<th>Health</th>
					<th>Attack</th>
					<th>Defense</th>
					<th>Link</th>
				</tr>
				<?php 
					foreach($result as $rows){
						$count++;
				?>
				<tr>
					<td><?php echo $rows[0]; ?></td>
					<td><?php echo $rows[1]; ?></td>
					<td><?php echo $rows[2]; ?></td>
					<td><?php echo $rows[3]; ?></td>
					<td><li><a href="pages/character.php">View</a></li></td>
				</tr>
				<?php 
					}
				?>
			</table>
			
			
			<?php 
				}
				if($check == true){
					var_dump($check);
			?>

			<h2>gelukt</h2>
				
			<?php 
				}
			?>
		</div>
		<div id='footer'>
			<footer>©Joey Kwestro</footer>
		</div>
	</div>
</body>
</html>