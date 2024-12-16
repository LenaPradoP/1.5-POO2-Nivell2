<?php
declare(strict_types = 1);
require_once("ClassShape.php");

class Triangle extends Shape {

    public function calculateArea() : float {
        $Area = 0.0;

        $Area = ($this->length * $this->height) / 2;

        return $Area;
    }

}

 ?>