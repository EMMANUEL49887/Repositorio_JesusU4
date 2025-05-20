<?php
require_once 'TwoDimensionalShape.php';

// Clase para representar un cuadrado
class Square extends TwoDimensionalShape {
    private $side; // Lado del cuadrado

    // Constructor que recibe el lado
    public function __construct($side) {
        parent::__construct("Square");
        $this->side = $side;
    }

    // Calcula el área del cuadrado: lado²
    public function getArea() {
        return pow($this->side, 2);
    }

    // Representación del cuadrado en texto
    public function __toString() {
        return parent::__toString() . " - Side: $this->side - Area: " . $this->getArea();
    }
}
?>
