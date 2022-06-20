<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
  $regex = '/^[a-zA-Z0-9]*$/';
  $nameString = 'AryanSharma9';
  if(preg_match($regex, $nameString)){
  	echo ("Hello");
  }
  else{
  	echo ("Bye");
  }
  ?>
</body>
</html>