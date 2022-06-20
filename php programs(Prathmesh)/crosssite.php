<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="crosssite.php" method="POST">
	<h1>XSS example</h1>
	<label for="urlnp">Enter username</label>
	<input type="text" name="usrlnp" id="usrlnp">
	<button type="submit" name="sub">Submit</button>
</form>
</body>
</html>
<?php
if (isset($_POST['sub'])) {
	$x=$_POST['usrlnp'];
	echo "Username is $x";
}
?>