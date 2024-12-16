<?php
declare(strict_types = 1);

abstract class Shape {

    protected float $length;
    protected float $height;

    public function __construct(float $length, float $height) {
        $this->length = $length;
        $this->height = $height;
    }

    abstract function calculateArea() : float;
}

 ?>