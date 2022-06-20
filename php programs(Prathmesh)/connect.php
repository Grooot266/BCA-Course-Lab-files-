<?php
$Server_Name="localhost";
$DB_Name="prathmesh";
$User_Name="root";
$Pwd="";
$conn=mysqli_connect($Server_Name,$User_Name,$Pwd,$DB_Name);
if(!$conn)
{
die("failed to connect to Mysql:".mysqli_error());
}
else
{
echo "DB connected";
}
?>
