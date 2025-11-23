
<?php
abstract class Shape{
    protected $pi ;
    function __construct($pi){
        $this->pi = $pi;
    }
    abstract public function area();
    abstract public function perimeter();

    function display(){
        echo "Area: ".$this->area()."\n";
        echo "Perimeter: ".$this->perimeter()."\n";
    }
}

//$obj = new Shape(3.14);

class Circle extends Shape{
  private $radius;
  function __construct($pi, $radius){
      parent::__construct($pi);
      $this->radius = $radius;
  }
  public function area(){
      return $this->pi * 4 * 4;
  }
  public function perimeter(){
      return 2 * $this->pi * 4;
  }
}

class Rectangle extends Shape{
    private $length;
    private $width;
    function __construct($pi, $length, $width){
        parent::__construct($pi);
        $this->length = $length;
        $this->width = $width;
    }
    public function area(){
        return $this->length * $this->width;
    }
    public function perimeter(){
        return 2 * ($this->length + $this->width);
    }
}

$c1 = new Circle(3.14, 4);
$c1->display();

$r1 = new Rectangle(3.14, 5, 10);
$r1->display();


////////////////////////////////////////////////Test3.php ??????????????????????????????????????????????????