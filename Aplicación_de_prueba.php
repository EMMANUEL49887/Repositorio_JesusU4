<?php
// Incluye todas las clases necesarias
require_once 'Circle.php';
require_once 'Square.php';
require_once 'Sphere.php';

// Crea un arreglo con varias figuras
$figures = [
    new Circle(5),   // Círculo con radio 5
    new Square(4),   // Cuadrado con lado 4
    new Sphere(3)    // Esfera con radio 3
];

// Muestra cada figura en la página
foreach ($figures as $figure) {
    echo $figure . "<br>";
}
?>
