<?php 


/*
Lecture 11: Defining properties

- he uses the var keyword instead of public, private, etc.
- to echo or use a class property, I use the arrow notation but NO dollar sign ($);
- if I want the property of a class, and I want to reference it in the class, I use: $this

Q: write a function that accesses both properties

*/



class Cars {


	var $wheel_count = 4;
	var $door_count = 4;



	function car_detail(){

		return "This car has " . $this->wheel_count . " Wheels";


	}

	function moreInfo() {
		return "# of Doors: " . $this->door_count . "<br>
				# of Wheels: " . $this->wheel_count . "<br>";

	}


}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count = 10;

echo "<br>";

echo $mercedes->wheel_count . "<br>";

echo $mercedes->car_detail();

echo "<br>";

echo $mercedes->moreInfo();




 ?>
