<?php
	if(session_status() === PHP_SESSION_NONE) session_start();
	require 'config.php';
	$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
	try {
		$pdo = new PDO($dsn, $user, $password);
		if ($pdo) {
			return $pdo;
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>
	<?php
	require('../model/connect.php');
	if (!isset($_SESSION['isUserLoggedIn'])){
		echo "<script>window.location.href='login.php';</script>";
	}
	?>