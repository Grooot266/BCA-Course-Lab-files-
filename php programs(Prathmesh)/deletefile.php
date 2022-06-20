<?php
if (!unlink("data.txt")) {
	echo "Could not delete a file";
}
else
{
	 echo "File deleted successfully";
}
?>