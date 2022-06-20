<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	class Students
	{
      public $first_name;
      public $last_name;
      public $address;
      public function __construct($first_name,$last_name,$address)
      {
      	$this->first_name=$first_name;
      	$this->last_name=$last_name;
      	$this->address=$address;
      }
      public function greeting(){
      	return "Hello".$this->first_name."\n";
      }
      public function getAddress(){
      	return $this->address."\n";
      }
	}
	$Students = new Students("Prathmesh","Patil","Belapur");
	echo $Students->greeting();
	echo $Students->getAddress();
	?>

</body>
</html>