<?php
$link = mysqli_connect("localhost","root","","demo");
if ($link ===false) {
	die("ERROR: Could not connect." .mysqli_connect_error());
}
$sql = "INSERT INTO persons(first_name, last_name, email) VALUES ('Kaustubh','Patil','kaustubh@gmail.com')";
//"INSERT INTO persons(first_name, last_name, email) VALUES ('Anshul','Sinha', 'anshul123@gmail.com')"
//"INSERT INTO persons(first_name, last_name, email) VALUES ('Boom','Obsi','_obsi_@gmail.com')"
//"INSERT INTO persons(first_name, last_name, email) VALUES ('Kuldeep','Singhvi','kuldeep234@gmail.com')"
//"INSERT INTO persons(first_name, last_name, email) VALUES ('Akanksha','Bhagat','akanksha456@gmail.com')";
if(mysqli_query($link, $sql)){
	echo "Records inserted successfully.";
}else{
	echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
}
mysqli_close($link);
?>