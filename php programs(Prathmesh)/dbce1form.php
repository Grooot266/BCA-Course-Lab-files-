<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>For insert record</h1>
<form action="dbce1insert.php" method="post">
	<p>
		<label for="firstName">First name:-</label>
		<input type="text" name="first_name" id="firstName">
	</p>
	<p>
		<label for="lastName">Last name:-</label>
		<input type="text" name="last_name" id="lastName">
	</p>
	<p>
		<label for="emailAddress">Email Address:-</label>
		<input type="text" name="email" id="emailAddress">
	</p>
	<input type="submit" value="Submit">
</form>
<h1>For update record</h1>
<form action="dbce1update.php" method="post">
	<p>
		<label for="id">id</label>
		<input type="number" name="id" id="id">
	</p>


	<p>
		<label for="firstName">First name:-</label>
		<input type="text" name="first_name" id="firstName">
	</p>
	<p>
		<label for="lastName">Last name:-</label>
		<input type="text" name="last_name" id="lastName">
	</p>
	<p>
		<label for="emailAddress">Email Address:-</label>
		<input type="text" name="email" id="emailAddress">
	</p>
	<input type="submit" value="Submit">
<h1>For delete record</h1>
<form action="dbce1update.php" method="post">
	<p>
		<label for="id">id</label>
		<input type="number" name="id" id="id">
	</p>
	<input type="submit" value="Submit">

</body>
</html>