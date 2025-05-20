<?php
require_once 'ThreeDimensionalShape.php';

// Clase para representar una esfera
class Sphere extends ThreeDimensionalShape {
    private $radius; // Radio de la esfera

    // Constructor que recibe el radio
    public function __construct($radius) {
        parent::__construct("Sphere");
        $this->radius = $radius;
    }

    // Área superficial: 4πr²
    public function getArea() {
        return 4 * pi() * pow($this->radius, 2);
    }

    // Volumen: (4/3)πr³
    public function getVolume() {
        return (4/3) * pi() * pow($this->radius, 3);
    }

    // Representación de la esfera en texto
    public function __toString() {
        return parent::__toString() . " - Radius: $this->radius - Area: " . $this->getArea() . " - Volume: " . $this->getVolume();
    }
}
?>

