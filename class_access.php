<?php 

/*
Lecture 13: Access Control Modifiers
- here are the public, private, protected...
- private => only available to this class or inside the class
- protected => available to sub-classes as well but ONLY inside the class
- we do this to control the flow of our programs
- best practice to use public, private, protected


*/

class Cars {


	public $wheel_count = 4;
	private $door_count = 4;
	protected $seat_count = 2;



	function car_detail(){

		echo $this->wheel_count . "<br>";
		echo $this->door_count . "<br>";
		echo $this->seat_count;

	}

}

$bmw = new Cars();

// echo $bmw->wheel_count; // this is public, I CAN see this
// echo $bmw->door_count; // this is private, and won't not be outputted
// echo $bmw->seat_count; // this is protected and won't be outputted

// $bmw->car_detail();





 ?>
