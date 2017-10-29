<?php 

/*
Lecture 15: Getters and Setters
- the private $door_count property can ONLY be accessed inside the Cars class
- This means that we cannot set it outside of the class (i.e. $bmw->door_count = 5);
- we use getters and setters to keep information private( properties) but also get and set values


*/

class Cars {


	Private $door_count = 4;



	function get_values(){

		echo $this->door_count;

	}


	function set_values(){

		$this->door_count = 10;

	}


}

$bmw = new Cars();

$bmw->set_values();

$bmw->get_values();





 ?>
