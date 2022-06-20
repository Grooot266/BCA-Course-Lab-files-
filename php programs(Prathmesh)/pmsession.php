<?php
session_start();                              
?>
<!DOCTYPE html>
<html>
<body>
<?php
// to change a session variable, just overwrite it
$_SESSION["fname"] = "Kaustubh";
echo "Hello  " . $_SESSION["fname"] .' '. $_SESSION["lname"] . ".";
?>
</body>
</html>