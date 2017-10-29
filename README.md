# Basic OOP Notes

## Lecture 8: Defining a Class
- In a class:
  - functions are METHODS
  - variables are PROPERTIES

- PHP keeps track of all the classes that you have created and you can see all of them using:
  - get_declared_classes()


## Lecture 9: Defining Methods
- PHP also keeps track of methods using get_class_methods('Cars');


## Lecture 10: Instantiating a Class
- to call the method of a class, use the arrow notation:
  - $bmw->greeting();

## Lecture 11: Defining properties
- he uses the var keyword instead of public, private, etc.
- to echo or use a class property, I use the arrow notation but NO dollar sign ($);
- if I want the property of a class, and I want to reference it in the class, I use: $this
Q: write a function that accesses both properties


## Lecture 12: Class Inheritance
- we use 'var' again and NOT public, private, protected. From PHP docs:
  - If declared using var, the property will be defined as public

## Lecture 13: Access Control Modifiers
- here are the public, private, protected...
- private => only available to this class or inside the class
- protected => available to sub-classes as well but ONLY inside the class
- we do this to control the flow of our programs
- best practice to use public, private, protected

## Lecture 14: Static Modifier
- we can attach 'static' to both a property and a method
- in a static method, we can't use '$this'; we can't use information that is not available everywhere
- so when referencing information from the same class, we have to make those properties static too...
- ...and reference them as if we're outside the method (i.e. Cars::$wheel_count)


## Lecture 15: Getters and Setters
- the private $door_count property can ONLY be accessed inside the Cars class
- This means that we cannot set it outside of the class (i.e. $bmw->door_count = 5);
- we use getters and setters to keep information private( properties) but also get and set values


## Lecture 16: Referencing Parent Class with Static
- using Static, you need context to get access to $wheel_count
- You can do that in two ways:
  - self::$wheel_count OR
  - Cars::$wheel_count
- You CANNOT use $this->wheel_count because 'this' implies the context. This is the error:
  - Fatal error: Using $this when not in object context...

## Lecture 17: Constructors and Destructors
- the constructor method is run automatically; you don't have to set it up
- why would we use the destruct method


