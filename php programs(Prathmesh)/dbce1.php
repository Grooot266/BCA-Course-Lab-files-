<?php
$link = mysqli_connect("localhost","root","","dbce1");
if($link ===false){
	die("ERROR: Could not connect." .mysqli_connect_error());
}
$sql = "CREATE TABLE student(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR(15) NOT NULL,
last_name VARCHAR(15) NOT NULL,
email VARCHAR(30) NOT NULL UNIQUE
)";
if (mysqli_query($link,$sql)) {
	echo "Table created successfully.";
}else{
	echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
}
mysqli_close($link);
?>