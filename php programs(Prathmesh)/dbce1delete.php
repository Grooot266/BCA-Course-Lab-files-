<?php 
 $link = mysqli_connect("localhost","root","","dbce1");
 if ($link === false) {
 	die("ERROR:- Could not connect." .mysqli_connect_error());
 }
 $id = mysqli_real_escape_string($link, $_REQUEST['id']);
 $sql = "DELETE FROM student WHERE id=$id";
 if (mysqli_query($link,$sql)) {
 	echo "Record delete successfully.";
 }else{
 	echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
 }
 mysqli_close($link);

 ?>