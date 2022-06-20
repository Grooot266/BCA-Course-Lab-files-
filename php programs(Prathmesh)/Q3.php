<h1>For Creating the file:-</h1>
<?php
$fp = fopen('Q3.txt','w');
fwrite($fp,'hello Prathmesh');
fclose($fp);
echo "File has been Created successfully" .$fp;
?>
<h1>For checking file existence</h1>
<?php
if (file_exists("Q3.txt")) {
	echo "The file exists"
}
else{
	echo "The file does not exist.";
}
?>

<h1>For deleting the file</h1>
<?php
if (!unlink("Q3.txt")) {
	echo "Could not delete a file";
}
else
{
	 echo "File deleted successfully";
}
?>

