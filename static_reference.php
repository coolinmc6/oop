<?php 
/*
Lecture 16: Referencing Parent Class with Static
- using Static, you need context to get access to $wheel_count
- You can do that in two ways:
  - self::$wheel_count OR
  - Cars::$wheel_count
- You CANNOT use $this->wheel_count because 'this' implies the context. This is the error:
  - Fatal error: Using $this when not in object context...


*/


class Cars {


	static $wheel_count = 4;



	static function car_detail(){

		// return self::$wheel_count;

		// return Cars::$wheel_count;

		// DOES NOT WORK
		return $this->wheel_count;



	}


	}


class Trucks extends Cars {

	static function display() {

		echo parent::car_detail();

	}

}

class GoKarts extends Cars {

	static function mdisplay() {
		echo parent::car_detail();
	}

}


Trucks::display();

echo '<br>';

GoKarts::mdisplay();



 ?>
