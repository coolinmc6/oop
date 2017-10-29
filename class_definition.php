<?php 

/*
Lecture 8: Defining a Class
In a class:
  - functions are METHODS
  - variables are PROPERTIES

- PHP keeps track of all the classes that you have created and you can see all of them using:
  - get_declared_classes()



*/

class Cars {


}

//
$my_classes = get_declared_classes();

foreach ($my_classes as  $class) {

	echo $class . "<br>";
}







 ?>
