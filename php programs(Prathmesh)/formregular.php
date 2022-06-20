<html>
<head>
<title></title>
</head>
<body class="container-fluid">
<form action="formregular.php" method="post" class="container-fluid py-2 px-5 my-5 mx-5">
<div class="row text-center py-2">
<div class="col">
<h2 class="text-muted">FORM</h2>
</div>
</div>
<div class="row text-center py-2">
<div class="col">
<label for="URL">Website Link / URL</label>
</div>
<div class="col">
<input type="text" name="URL" id="URL" required>
</div>
</div>
<div class="row text-center py-2">
<div class="col">
<label for="email">E-mail ID</label>
</div>
<div class="col">
<input type="email" name="email" id="email" required>
</div>
</div>
<div class="row text-center py-2">
<div class="col">
<label for="Number">Mobile Number:-</label>
</div>
<div class="col">
<input type="Number" name="Number" id="Number" required>
</div>
</div> 

<div class="row text-center py-5">
<div class="col">
<button type="submit" name = 'sub' id='sub' class="button p-
2">SUBMIT</button>
</div>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['sub'])){
	$webUrl=$_POST['URL'];
	$email=$_POST['email'];

if(preg_match('/^www\.[a-z]+\.[a-z]{1,3}$/',$webUrl)){
	echo"<p>Url format is valid</p>";
}else{
	echo "<p>Invalid URL format</p>";
}
if(preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/',$email)){
	echo "<p>Email format is valid</p>";
}
else{
	echo "<p>Invalid Email format</p>";
$Number=$_POST['Number'];

if(preg_match('^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$^',$Number))
{
echo "<p> Valid phone number </p>";
}
else
{
echo "<p> Invalid Phone number </p>";
}
}

}
?>