<?php
 $Server_Name="Localhost";
 $DB_Name="mydatabase";
 $User_Name="root";
 $Pwd="";
 $conn=mysqli_connect($Server_Name,$User_Name,$Pwd,$DB_Name);
 if(!$conn)
 {
  die("Failed to connect Mysql:-" .mysqli_error());
 }
 else{
  echo "Db connected";
 }
?>