<?php
require_once 'Shape.php';

// Clase abstracta para figuras bidimensionales
abstract class TwoDimensionalShape extends Shape {
    // Método abstracto que deben implementar las figuras 2D para calcular área
    abstract public function getArea();
}
?>
