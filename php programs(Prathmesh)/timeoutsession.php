<?php
session_start();
$user="Prathmesh";
echo "this session will expired within 20 sec please refresh the page ";
$_SESSION["user"]=$user;
$_SESSION["user"]=time();
if (time() - $_SESSION["user"] > 20) {
	
	echo "\n The page is refresh";
}
else {
	session_destroy();
	echo "this page is expired";
}