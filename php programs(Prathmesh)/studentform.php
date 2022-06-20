<html>
<head>
<title><title>
</head>
<body>
<?php
$name = $email = $gender = $comment = $website = "";
if($_SERVER['REQUEST_METHOD"] == "POST"){
$name = $_POST["name'];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];
$gender = $_POST["gender"];
}
?>

<h2>Student registration form</h2>

<form method='post'>
<table>
<tr>
<td>Name</td>
<td><input type = "text" name="name"></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type = "text" name="email"></td>
</tr>
<tr>
<td>Specific Time</td>
<td><input type = "text" name="websie"></td>
</tr>
<tr>
<td>Class details</td>
<td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
</tr>
<tr>
<td>Gender</td>
<td>
<input type = "radio" name="gender" value = "Male">
<input type = "radio" name="gender" value = "female">
</td>
</tr>
<tr>
<td>
<input type = "submit" name="submit" value="Submit">
</td>
</tr>
</table>
</form>
<?php
echo "<h2> Your Given details are as:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
