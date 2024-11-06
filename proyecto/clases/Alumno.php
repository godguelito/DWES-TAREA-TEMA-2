<?php
require_once 'clases/Alumno.php';

class Alumno extends Miembro { //Creación de la clase hija Alumno
    private int $edad;
    private array $asignaturas;
    private bool $cursoAbonado;

    //Método constructor
    public function __construct(int $id, $nombre, $apellidos, $email, int $edad) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
    }

    //Métodos getters y setters
    public function getEdad() : int{
        return $this->edad;
    }

    public function getAsignaturas() : array{
        return $this->asignaturas;
    }

    public function getcursoAbonado() : bool{
        return $this->cursoAbonado;
    
}

    public function setEdad(int $edad) {
        $this->edad = $edad;
    }

    public function setAsignaturas(array $asignaturas) {
        $this->asignaturas = $asignaturas;
    }

    public function setcursoAbonado(bool $cursoAbonado) {
        $this->cursoAbonado = $cursoAbonado;
    }
    
    //Método abonarCurso
    public function abonarCurso() : bool{
        return true;
    }

    //Método matricularseEnAsignatura
    public function matricularseEnAsignatura(string $asignatura) : void{
        if (in_array($asignatura, $this->asignaturas)) {
            echo "El alumno ya ha sido matriculado en la asignatura."; }
            
        else {
                $this->asignaturas[] = $asignatura;
            }
    }

    //Método crearAlumnosdeMuestra con un array de alumnos.
    public static function crearAlumnosdeMuestra(): array{
        $alumno1 = new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22);
        $alumno2 = new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25);
        $alumno3 = new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24);
        $alumno4 = new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
        $alumno5 = new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21);
        $alumno6 = new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
        $alumno7 = new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
        $alumno8 = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumno9 = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
        $alumno10 = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);

        return [$alumno1, $alumno2, $alumno3, $alumno4, $alumno5, $alumno6, $alumno7, $alumno8, $alumno9, $alumno10];
    }
}

?>