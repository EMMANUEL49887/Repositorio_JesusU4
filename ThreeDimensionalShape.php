<?php
require_once 'Shape.php';

// Clase abstracta para figuras tridimensionales
abstract class ThreeDimensionalShape extends Shape {
    // Método abstracto para calcular el área superficial
    abstract public function getArea();

    // Método abstracto para calcular el volumen
    abstract public function getVolume();
}
?>
