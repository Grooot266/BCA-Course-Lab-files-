<?php
class Vehicle
public $name;  
public $color;
function __construct($name) {   
$this->name = $name;  
}
function __destruct() {    
echo "The Vehicle is {$this->name}.";
}
$jaguar = new Fruit(“Jaguar");
?>
