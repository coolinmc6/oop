<?php 
/*
Lecture 17: Constructors and Destructors
- the constructor method is run automatically; you don't have to set it up
- why would we use the destruct method


*/


class Cars {


	public $wheel_count = 4;

	static $door_count = 4;

	static $make_count = 1;



	function __construct(){

		// echo $this->wheel_count;
		echo self::$door_count++;
		// echo self::$door_count;
		echo "<br>Cars Made: " . self::$make_count++ . "<br>";

	}

	function __destruct(){

		// echo $this->wheel_count;
		// echo self::$door_count--;

	}


}

$bmw = new Cars();

$ford = new Cars();

$taurus = new Cars();
// $merceds = new Cars();

// $merceds_2 = new Cars();
// $bmw->details();





 ?>
