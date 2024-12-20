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