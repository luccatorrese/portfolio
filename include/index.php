<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>GFG- Store Data</title>
	</head>
	<body>
		<!-- centralisation du texte -->
		<center>
			<h1>Storing Form data in Database</h1>
			<form action="insert.php" method="post">
		<p>
			<!-- prénom -->
			<label for="firstName">First Name:</label>
			<input type="text" name="firstName" id="firstName">
		</p>
		<p>
			<!-- nom -->
			<label for="lastName">Last Name:</label>
			<input type="text" name="lastName" id="lastName">
		</p>
		<p>
			<!-- genre -->
			<label for="gender">Gender:</label>
			<input type="text" name="gender" id="gender">
		</p>
		<p>
			<!-- adresse fixe -->
			<label for="address">Address:</label>
			<input type="text" name="address" id="address">
		</p>
		<p>
			<!-- adresse électronique -->
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="emailAddress" id="emailAddress">
		</p>
			<input type="submit" value="Submit">
			</form>
		</center>
	</body>
</html>
