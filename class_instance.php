<?php 

/*
Lecture 10: Instantiating a Class

- to call the method of a class, use the arrow notation:
  - $bmw->greeting();

*/

class Cars {



	function greeting() {

		echo "Hello Student" . "<br>";


	}

}

$bmw = new Cars();

$mercedes = new Cars();



$bmw->greeting();
$mercedes->greeting();







 ?>
