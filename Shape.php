<?php
// Clase base abstracta para todas las figuras
abstract class Shape {
    protected $name; // Nombre de la figura

    // Constructor que asigna un nombre
    public function __construct($name = "Undefined Shape") {
        $this->name = $name;
    }

    // Getter del nombre
    public function getName() {
        return $this->name;
    }

    // Setter del nombre
    public function setName($name) {
        $this->name = $name;
    }

    // Representación en texto del objeto
    public function __toString() {
        return "Shape: " . $this->name;
    }
}
?>