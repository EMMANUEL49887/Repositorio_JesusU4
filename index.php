<?php
require_once 'Docente.php';
require_once 'Alumno.php';

// Docentes iniciales
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 20);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matemáticas", "Dr.", 15);

// Alumnos iniciales
$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("Maria", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);

// Nuevos docentes
$docente3 = new Docente("Luis", "Ramirez", "Santos", 50, "Física", "Ing.", 25);
$docente4 = new Docente("Laura", "Fernandez", "Castillo", 33, "Biología", "Lic.", 7);

// Nuevos alumnos
$alumno3 = new Alumno("Pedro", "Mendoza", "Rojas", 22, "Química", 9.1, 6);
$alumno4 = new Alumno("Sofia", "Navarro", "Jimenez", 18, "Historia", 8.4, 2);

// Mostrar nombres completos
echo "<h2>Usuarios iniciales:</h2>";
echo $docente1->obtenerNombreCompleto() . "<br>";
echo $docente2->obtenerNombreCompleto() . "<br>";
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo $alumno2->obtenerNombreCompleto() . "<br>";

echo "<h2>Nuevos usuarios:</h2>";
echo $docente3->obtenerNombreCompleto() . "<br>";
echo $docente4->obtenerNombreCompleto() . "<br>";
echo $alumno3->obtenerNombreCompleto() . "<br>";
echo $alumno4->obtenerNombreCompleto() . "<br>";

// Cambiar algunos datos
$docente1->cambiarGradoAcademico("Dr.");
$docente1->cambiarAntiguedad(22);
$docente2->cambiarDepartamento("Física");

$alumno1->cambiarPromedio(9.8);
$alumno2->cambiarSemestre(4);
$alumno2->cambiarDepartamento("Computación");

// Mostrar los cambios
echo "<h2>Usuarios después de cambios:</h2>";
echo $docente1->obtenerNombreCompleto() . " - Antigüedad: " . $docente1->obtenerAntiguedad() . "<br>";
echo $docente2->obtenerNombreCompleto() . " - Nuevo Departamento: " . $docente2->obtenerDepartamento() . "<br>";
echo $alumno1->obtenerNombreCompleto() . " - Nuevo Promedio: " . $alumno1->obtenerPromedio() . "<br>";
echo $alumno2->obtenerNombreCompleto() . " - Semestre: " . $alumno2->obtenerSemestre() . ", Departamento: " . $alumno2->obtenerDepartamento() . "<br>";
?>
