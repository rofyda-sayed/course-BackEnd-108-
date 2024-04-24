<?php
abstract class shape
{
    abstract public function area();
    abstract public function perimeter();
}

interface Drawable
{

    public function draw();
}
class Circle extends shape implements Drawable
{ 
    public $radius;
    public function __construct($Radi)
    {
        $this->radius = $Radi;
    }
    public function area()
    {
        return pi() * ($this->radius * $this->radius);
    }
    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }
    public function draw()
    {
        echo "<div style='width: " . (2 * $this->radius) . "px; height: " . (2 * $this->radius) . "px; border-radius: 50%; background-color: #F3D0D7;'></div>";
    }
}
class Rectangle extends shape implements Drawable
{
    public $length;
    public $width;
    public function __construct($len, $wed)
    {
        $this->length = $len;
        $this->width = $wed;
    }
    public function area()
    {
        return $this->length * $this->width;
    }
    public function Perimeter()
    {
        return 2 * $this->width + 2 * $this->length;
    }
    public function draw()
    {
        echo "<div style='width: ; " . $this->length . "px; height: " . $this->width . "px; background-color: #7EA1FF;'></div>";
    }
}
$circle = new Circle(45);
echo "Circle Area: " .$circle->area() ."<br>" ;
echo "Circle Perimeter: " .$circle->perimeter() ."<br>" ;
echo"Circle Shape:";
$circle->draw();

$rectangular = new Rectangle(50,35);
echo "Rectangular Area: " .$rectangular->area() ."<br>" ;
echo "Rectangular Perimeter: " .$rectangular->Perimeter() ."<br>" ;
echo"Rectangular Shape:";
$rectangular->draw();