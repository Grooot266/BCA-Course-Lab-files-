<?php
$conn = new mysqli("localhost","root","","demo");
if ($conn -> connect_error){
	die("Connection failed:"  .$conn->connect_error);
}
$sql = "UPDATE persons SET last_name='Doc' WHERE id=5";
if ($conn->query($sql)=== TRUE) {
	echo "record updated successfully";
}else{
	echo "Error updating record" .$conn->error;
}
$conn->close();
?>