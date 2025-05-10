<?php
require_once 'UsuarioCorreo.php';

class Alumno extends UsuarioCorreo {
    private $promedio;
    private $semestre;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $promedio, $semestre) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->promedio = $promedio;
        $this->semestre = $semestre;
    }

    public function cambiarPromedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }

    public function cambiarSemestre($nuevoSemestre) {
        $this->semestre = $nuevoSemestre;
    }

    public function obtenerPromedio() {
        return $this->promedio;
    }

    public function obtenerSemestre() {
        return $this->semestre;
    }

    public function obtenerNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidoPaterno . ' ' . $this->apellidoMaterno;
    }
}
?>
