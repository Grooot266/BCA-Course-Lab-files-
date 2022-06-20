<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$contacts = array(
		array(
			'name'=> 'Groot',
			'email'=> 'groot@gmail.com',
		),
		array(
		     'name'=> 'Monu',
		     'email'=> 'monu@gmail.com',
		 ),
	    array(
	         'name'=> 'Prathmesh',
	         'email'=>'prathmesh@gmail.com',
	     )
	);
	echo "Groots Email-id is " .$contacts[0]['email'];
	?>

</body>
</html>