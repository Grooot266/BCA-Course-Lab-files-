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

