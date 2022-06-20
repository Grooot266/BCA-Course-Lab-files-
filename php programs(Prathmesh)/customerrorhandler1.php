<?php
function php_error_handler($error_no, $error_msg){
	echo "Ooops! Something went wrong......";
	echo "Possible reason: " .$error_msg;
	echo "We are working on it.";
}
set_error_handler("php_error_handler");
$myfile = fopen("abc.txt", "r");
?>