<?php
//Creación de la clase Asignatura con sus atributos correspondientes.
class Asignatura {
    private int $id;
    private $nombre;
    private $creditos;

    //Método constructor
    public function __construct(int $id, $nombre, $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    //Métodos Setters y Getters
    public function getId(): int {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setCreditos($creditos): void {
        $this->creditos = $creditos;
    }

    

    //Método estático que crea una colección de asignaturas de muestra.
    public static function crearAsignaturasdeMuestra(): array {
        $asignatura1 = new Asignatura(1, "DWES", "7 créditos");
        $asignatura2 = new Asignatura(2, "DWEC", "6 créditos");
        $asignatura3 = new Asignatura(3, "DIW", "4 créditos");
        $asignatura4 = new Asignatura(4, "DAW", "4 créditos");

        return [$asignatura1, $asignatura2, $asignatura3, $asignatura4];
    }
}
?>