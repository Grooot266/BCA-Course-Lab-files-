<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	class Car{
		private $model;
		public function setModel ($model)
		{
			$this -> model = $model;
		}
		public function hello()
		{
			return "beep! I am a <i>" .$this -> model. "</i><br/>";
		}
	}
	class SportsCar extends Car{

	}
	$sportsCarl=new SportsCar();
	$sportsCarl->setModel('Lambhorgini');
	echo $sportsCarl->hello();
	?>

</body>
</html>