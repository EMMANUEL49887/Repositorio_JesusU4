<?php
require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {
    private $gradoAcademico;
    private $antiguedad;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $gradoAcademico, $antiguedad) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    // Métodos para modificar
    public function cambiarGradoAcademico($nuevoGrado) {
        $this->gradoAcademico = $nuevoGrado;
    }

    public function cambiarAntiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }

    // Métodos para obtener
    public function obtenerGradoAcademico() {
        return $this->gradoAcademico;
    }

    public function obtenerAntiguedad() {
        return $this->antiguedad;
    }

    // Sobrescribe el método abstracto
    public function obtenerNombreCompleto() {
        return $this->gradoAcademico . ' ' .
               $this->nombre . ' ' .
               $this->apellidoPaterno . ' ' .
               $this->apellidoMaterno;
    }
}
?>
