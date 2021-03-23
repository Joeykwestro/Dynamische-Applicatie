<?php
	try {
	    $dbh = new PDO('mysql:host=localhost;dbname=caracters', 'root', 'mysql');
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
