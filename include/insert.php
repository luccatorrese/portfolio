<?php

	//acquisition des données issues du formulaire
	$values = [
	':first_name'=>$_POST['firstName'],
	':last_name'=>$_POST['lastName'],
	':genre'=>$_POST['gender'],
	':address'=>$_POST['address'],
	':email'=>$_POST['emailAddress']
	];

	// ouvrir une connexion
	$pdo = require_once "connect.php";
	$sql = "INSERT INTO college (first_Name, last_Name, genre, address, email) VALUES (:first_name, :last_name, :genre, :address, :email)";
	$statement = $pdo->prepare($sql);
	$statement->execute($values);
	
	print_r($values);

?>
