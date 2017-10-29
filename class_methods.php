<?php 

/*
Lecture 9: Defining Methods
- PHP also keeps track of methods using get_class_methods('Cars');

*/

class Cars {



function greeting(){


	}



function greeting2(){


	}

}


$the_methods = get_class_methods('Cars');


foreach ($the_methods as  $method) {

echo $method . "<br>";
}







 ?>
