<?php 


/*
Lecture 14: Static Modifier
- we can attach 'static' to both a property and a method
- in a static method, we can't use '$this'; we can't use information that is not available everywhere
- so when referencing information from the same class, we have to make those properties static too...
- ...and reference them as if we're outside the method (i.e. Cars::$wheel_count)


*/



class Cars {


	static $wheel_count = 4;
	static $door_count = 4;

	static function car_detail(){


		echo Cars::$wheel_count . "<br>";
		echo Cars::$door_count;

	}


}


echo Cars::$door_count;

echo "<br>";

Cars::car_detail();



 ?>
