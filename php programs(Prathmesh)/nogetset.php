<?php
class Person{
	private $fname;
	private $lname;

	public function setFName($fname){
	$this->fname=$fname;
	}
	public function setLName($lname){
	$this->lname=$fname;
	}
	public function showName(){
	echo "My name is:".$this->fname."",$this->lname;
	}
}
$john = new Person();
$john->fname="john";
$john->lname="Wick";
$john->setFName("John");
$john->setLName("Wick");
?>