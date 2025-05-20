<?php

// Clase base
class CommunityMember {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getRole() {
        return "Community Member";
    }

    public function identify() {
        return "Soy parte de la comunidad universitaria.";
    }
}

// Empleado
class Employee extends CommunityMember {
    public function getRole() {
        return "Employee";
    }

    public function work() {
        return $this->name . " está trabajando para la universidad.";
    }
}

// Facultad
class Faculty extends Employee {
    public function getRole() {
        return "Faculty";
    }

    public function attendMeeting() {
        return $this->name . " está asistiendo a una reunión académica.";
    }
}

// Staff
class Staff extends Employee {
    public function getRole() {
        return "Staff";
    }

    public function manageOffice() {
        return $this->name . " está gestionando las oficinas administrativas.";
    }
}

// Administrador
class Administrator extends Faculty {
    public function getRole() {
        return "Administrator";
    }

    public function makeDecision() {
        return $this->name . " está tomando decisiones importantes.";
    }
}

// Maestro
class Teacher extends Faculty {
    public function getRole() {
        return "Teacher";
    }

    public function teach() {
        return $this->name . " está enseñando a sus estudiantes.";
    }
}

// Estudiante
class Student extends CommunityMember {
    public function getRole() {
        return "Student";
    }

    public function study() {
        return $this->name . " está estudiando para los exámenes.";
    }
}

// Ex-alumno
class Alumnus extends CommunityMember {
    public function getRole() {
        return "Alumnus";
    }

    public function donate() {
        return $this->name . " ha donado a la universidad.";
    }
}

// -------------------------
// Ejemplo de uso:
$person1 = new Teacher("Luis");
$person2 = new Administrator("Ana");
$person3 = new Staff("Carlos");
$person4 = new Student("Sofía");
$person5 = new Alumnus("Marta");

echo $person1->getRole() . ": " . $person1->teach() . "\n";
echo $person2->getRole() . ": " . $person2->makeDecision() . "\n";
echo $person3->getRole() . ": " . $person3->manageOffice() . "\n";
echo $person4->getRole() . ": " . $person4->study() . "\n";
echo $person5->getRole() . ": " . $person5->donate() . "\n";

?>
