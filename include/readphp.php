<!DOCTYPE html>
<html>
	<head>
		<title>Read Data From Database Using PHP </title>
		<meta content="noindex, nofollow" name="robots">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="maindiv">
		<div class="divA">
		<div class="title">
		<h2>Read Data Using PHP</h2>
		</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
	require_once('connect.php');
	//execute a query
	$sql = 'SELECT * FROM college';
	$statement = $pdo->query($sql);
	// fetch the next row
	while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {}
?>
// TODO : script php se connecte à la base de données, prépare une requête
pour sélectionner tout les éléments de la table college et qui affiche
autant d’élément de la table à l’aide d’une balise <a> avec un href qui
rappelle le script readphp.php en passant l’id en mode get.
</div>
// TODO : script php qui permet de sélectionner toutes les lignes de la
table college grâce à un fetch. Attention, il finit par une instruction
while sur la variable $row
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>First Name:</span> <?php echo $row['first_name']; ?>
<span>Last Name:</span> <?php echo $row['last_name']; ?>
<span>Genre:</span> <?php echo $row['genre']; ?>
<span>Address:</span> <?php echo $row['address']; ?>
<span>E-mail:</span> <?php echo $row['email']; ?>
</div>
<?php
?>
</div>
</body>
</html>