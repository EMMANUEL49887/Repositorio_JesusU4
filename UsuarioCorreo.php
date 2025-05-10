<?php
abstract class UsuarioCorreo {
    private static $contadorID = 1; 
    private $id;
    protected $nombre;  // <-- Cambiado a protected
    protected $apellidoPaterno;
    protected $apellidoMaterno;
    private $edad;
    private $departamento;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento) {
        $this->id = self::$contadorID++;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }

    public function cambiarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function cambiarEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }

    public function cambiarDepartamento($nuevoDepartamento) {
        $this->departamento = $nuevoDepartamento;
    }

    public function obtenerId() {
        return $this->id;
    }

    public function obtenerEdad() {
        return $this->edad;
    }

    public function obtenerDepartamento() {
        return $this->departamento;
    }

    abstract public function obtenerNombreCompleto();
}
?>
