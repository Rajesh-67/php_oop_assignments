<?php
// Abstract class Shape
abstract class Shape {
    protected Location $c;

    public function __construct(Location $location) {
        $this->c = $location;
    }

    abstract public function Area(): float;
    abstract public function Perimeter(): float;

    public function ToString(): string {
        return "Location: (" . $this->c->getX() . ", " . $this->c->getY() . ")";
    }
}

// Location class
class Location {
    protected float $x;
    protected float $y;

    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }
}

// Rectangle class inherits Shape
class Rectangle extends Shape {
    protected float $side1;
    protected float $side2;

    public function __construct(Location $location, float $side1, float $side2) {
        parent::__construct($location);
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function Area(): float {
        return $this->side1 * $this->side2;
    }

    public function Perimeter(): float {
        return 2 * ($this->side1 + $this->side2);
    }

    public function ToString(): string {
        return "Rectangle at " . parent::ToString() . 
               " | Area: " . $this->Area() . 
               " | Perimeter: " . $this->Perimeter();
    }
}

// Circle class inherits Shape
class Circle extends Shape {
    protected float $radius;

    public function __construct(Location $location, float $radius) {
        parent::__construct($location);
        $this->radius = $radius;
    }

    public function Area(): float {
        return pi() * pow($this->radius, 2);
    }

    public function Perimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function ToString(): string {
        return "Circle at " . parent::ToString() . 
               " | Area: " . $this->Area() . 
               " | Perimeter: " . $this->Perimeter();
    }
}

// Example usage
$loc1 = new Location(5, 10);
$rect = new Rectangle($loc1, 4, 6);
echo $rect->ToString() . "<br>";

$loc2 = new Location(2, 3);
$circle = new Circle($loc2, 5);
echo $circle->ToString();
?>