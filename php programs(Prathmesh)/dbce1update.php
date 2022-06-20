<?php 
 $link = mysqli_connect("localhost","root","","dbce1");
 if ($link === false) {
 	die("ERROR:- Could not connect." .mysqli_connect_error());
 }
 $id = mysqli_real_escape_string($link, $_REQUEST['id']);
 $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
 $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
 $email = mysqli_real_escape_string($link, $_REQUEST['email']);
 $sql = "UPDATE student SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$id";
 if (mysqli_query($link,$sql)) {
 	echo "Record updated successfully.";
 }else{
 	echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
 }
 mysqli_close($link);

 ?>