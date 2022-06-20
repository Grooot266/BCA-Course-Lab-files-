<?php                               
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
//echo "Hello  " . $_SESSION["fname"] .' '. $_SESSION["lname"] . ".";
print_r($_SESSION);
?>
</body>
</html>