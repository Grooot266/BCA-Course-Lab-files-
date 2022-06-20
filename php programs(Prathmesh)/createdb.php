<?php
$link = mysqli_connect("localhost","root","");
if ($link === false) {
	die("ERROR:_ Could not connect" .mysql_connect_error());
}
$sql = "CREATE DATABASE Demo";
if (mysqli_query($link,$sql)) {
	echo "Database created successfully";
}
else{
	echo "ERROR:-Could not able to execute $sql." .mysqli_error($link);
}
mysqli_close($link);
?>