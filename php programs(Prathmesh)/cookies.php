<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$cookie_name="user";
$cookie_value="Prathmesh Patil";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named".$cookie_name."is not set!";
}else{
	echo "Cookie ".$cookie_name." is set!<br>";
	echo "The value is:" .$_COOKIE[$cookie_name];
}
?>
</body>
</html>