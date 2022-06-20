<html>
<head>
<title></title>
</head>
<body>
<form action="welcome.php" method="post">
Name:<input type="text" name="name"/>
<input type="submit" value="visit/">
</form>
</body
</html>
<?php>
$name=$_POST['name'];
echo "Welcome,$name";
?>