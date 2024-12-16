<?php
declare(strict_types = 1);

require_once("ClassShape.php");

class Rectangle extends Shape {

    public function calculateArea() : float {
        $Area = 0.0;

        $Area = $this->length * $this->height;

        return $Area;
    }

}

 ?>