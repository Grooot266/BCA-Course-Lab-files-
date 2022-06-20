<?php
if (file_exists("kleembus.txt")) {
	$file = fopen("kleembus.txt", "r");
}
else{
	echo "Error: The file does not exist by without using die.";
}
?>