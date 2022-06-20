<?php
class Person{
	private $name;
	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
}

$john=new Person();
$john->setName("Prathmesh Patil");
echo "My name is ".$john->getName();
?>