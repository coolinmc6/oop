<?php 

/*
Lecture 12: Class Inheritance
- we use 'var' again and NOT public, private, protected. From PHP docs:
  - If declared using var, the property will be defined as public




*/

class Cars {

	var $wheels = 4;


	function gretting(){

		return "hello";


	}



}


$bmw = new Cars();



class Trucks extends Cars {


}

class GoKart extends Cars {

	public $items = true;
}


$tacoma = new Trucks();

echo $tacoma->wheels;

echo "<br>";

$mario = new GoKart();

echo $mario->wheels;
echo "<br>";
echo $mario->items;
echo "<br>";






 ?>
