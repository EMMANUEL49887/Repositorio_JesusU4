<?php
require_once 'TwoDimensionalShape.php';

// Clase para representar un círculo
class Circle extends TwoDimensionalShape {
    private $radius; // Radio del círculo

    // Constructor que recibe el radio
    public function __construct($radius) {
        parent::__construct("Circle"); // Llama al constructor padre con el nombre
        $this->radius = $radius;
    }

    // Calcula el área del círculo: π * r²
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    // Representación del círculo en texto
    public function __toString() {
        return parent::__toString() . " - Radius: $this->radius - Area: " . $this->getArea();
    }
}
?>
