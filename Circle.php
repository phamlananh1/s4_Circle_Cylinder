<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 11:20
 */

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->mauSac = $color;
    }
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function perimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function __toString()
    {
        return "Area = " . $this->area() ."<br>" . "Perimeter:".$this->perimeter() ."<br>";
    }
}
?>