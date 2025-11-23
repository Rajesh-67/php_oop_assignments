<?php

/*
   Interface in PHP :
    - An interface is a contract that defines a set of methods that a class must implement. 
    - Interfaces are declared using the interface keyword.
    - All methods in an interface are abstract by default, meaning they do not have a body
    - A class can implement multiple interfaces, allowing for a form of multiple inheritance.
    - Interfaces can also define constants.
    - Interfaces are useful for defining common behaviors that can be shared across different classes, regardless of their position in the class hierarchy.
    - Interfaces help achieve polymorphism, as different classes can be treated uniformly based on the interfaces they implement.
    - One interface can extend another interface, allowing for the creation of more complex contracts.
    - Interfaces cannot contain properties; they can only contain method signatures and constants.
    - One interface can extend multiple interfaces, allowing for a combination of behaviors.
    -The scope of interface methods is always public; they cannot be declared as private or protected.
    -Interfaces areused for implementing dependency injection, which promotes loose coupling between classes.
    - The constant declared in an interface is by default public, static, and final.      
    - syntax:
        interface InterfaceName {
            public function method1();
            public function method2($param);
            const CONSTANT_NAME = value;
        }
    -Example:
     interface Shape {
          const PI = 3.14;
          public function area();
          public function perimeter();
     }
     class Circle implements Shape {
          private $radius;
          public function __construct($radius) {
              $this->radius = $radius;
          }
          public function area() {
              return self::PI * $this->radius * $this->radius;
          }
          public function perimeter() {
              return 2 * self::PI * $this->radius;
          }
     }
      $circle = new Circle(5);

      echo "Area: " . $circle->area() . "\n";
      echo "Perimeter: " . $circle->perimeter() . "\n";
  
    - Difference btween extends and implements:
        1. The extends keyword is used when a class inherits from another class (single inheritance) or when an interface inherits from another interface.
        2. The implements keyword is used when a class implements an interface, meaning it agrees to provide concrete implementations for all the methods defined in that interface.
        3. A class can extend only one parent class but can implement multiple interfaces.
        4. When using extends, the subclass inherits properties and methods from the parent class, while when using implements, the class must define

     - Difference between Abstract Class and Interface:
        1. Abstract Class can have both abstract and concrete methods, while Interface can only have abstract methods (until PHP 8.0, which introduced default methods in interfaces).
        2. A class can inherit from only one Abstract Class (single inheritance), but it can implement multiple Interfaces (multiple inheritance).
        3. Abstract Classes can have properties, while Interfaces cannot have properties (only constants).
        4. Abstract Classes are declared using the abstract keyword, while Interfaces are declared using the interface keyword.


     - Difference between class and Interface:
        1. A class is a blueprint for creating objects, while an interface is a contract that defines a set of methods that a class must implement.
        2. A class can have properties and methods with implementations, while an interface can only have method signatures (until PHP 8.0, which introduced default methods in interfaces).
        3. A class can be instantiated to create objects, while an interface cannot be instantiated directly.
        4. A class can inherit from another class (single inheritance) or implement multiple interfaces, while an interface can extend multiple interfaces.

     - What is dependency injection?
        Dependency Injection (DI) is a design pattern used in object-oriented programming to achieve Inversion of Control (IoC) between classes and their dependencies. 
        It involves providing an object with its dependencies from an external source rather than having the object create or manage its dependencies internally.
        This promotes loose coupling, making the code more modular, testable, and maintainable.
        There are several ways to implement dependency injection, including constructor injection, setter injection, and interface injection.


  */

interface Shape {
    const PI = 3.14;
    public function area();
    public function perimeter();
    public function display();
}

class Circle implements Shape {
  private $radius;
  public function __construct($radius) {
      $this->radius = $radius;
  }
  public function area(){
      return self::PI * $this->radius * $this->radius;
  }
  public function perimeter(){
      return 2 * self::PI * $this->radius;
  }
  public function display(){
      echo "Area: ".$this->area()."\n";
      echo "Perimeter: ".$this->perimeter()."\n";
  }
} 

class Rectangle implements Shape {
    private $length;
    private $width;
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    public function area(){
        return $this->length * $this->width;
    }
    public function perimeter(){
        return 2 * ($this->length + $this->width);
    }
    public function display(){
        echo "Area: ".$this->area()."\n";
        echo "Perimeter: ".$this->perimeter()."\n";
    }
}

$c1 = new Circle(4);
$c1->display();

$r1 = new Rectangle(5, 6);
$r1->display();

/////////////////////////////// Test4.php ????????????????????????????????????????????????????????????????????????????????

