<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="crossprevent.php" method="POST">
	<h1>XSS example</h1>
	<label for="urlnp">Enter username</label>
	<input type="text" name="usrlnp" id="usrlnp">
	<button type="submit" name="sub">Submit</button>
    </form>
<?php
if (isset($_POST['sub'])) {
	$x=$_POST['usrlnp'];
	echo "Username is".purifyInput($x);
}
function purifyInput($inp){
	$inp=strip_tags($inp);
	$inp=stripcslashes($inp);
	$inp=htmlspecialchars($inp);
	$inp=trim($inp,"\t\n\r");
	return $inp;
}
?>

</body>
</html>