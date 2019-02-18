<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 11:31
 */
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function area()
    {
        return parent::area() * 2 + parent::perimeter() * $this->height;
    }

    public function volume()
    {
        return parent::area() * $this->height;
    }
    public function __toString()
    {
        return "Area = " . $this->area() ."<br>". " Volume = " . $this->volume();
    }
}
