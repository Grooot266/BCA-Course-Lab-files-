$Server_Name="localhost";
$DB_Name="bcasem4";
$User_Name="root;
$Pwd='';
$conn=mysqli_connent($Server_Name,$User_Name,$Pwd,$DB_Name);
if(!$conn)
{
die("Failed to connect to Mysql:" . mysqli_error());
}
else
{
echo "Db connected";
}
?>
