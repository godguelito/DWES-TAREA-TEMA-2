<?php
//Creacion de la clase Profesor que hereda atributos de miembro.
class Profesor extends Miembro {
    private bool $titular = false;
    private $asignatura;

    //Método constructor
    public function __construct (int $id, $nombre, $email, $asignatura){
        parent::__construct($id, $nombre, $email);
        $this->asignatura = $asignatura;
    }

    //Métodos Setters y Getters
    public function getTitular(): bool {
        return $this->titular;
    }

    public function getAsignatura() {
        return $this->asignatura;
    }

    public function setTitular(bool $titular): void {
        $this->titular = $titular;
    }

    public function setAsignatura($asignatura): void {
        $this->asignatura = $asignatura;
    }

    //Método estático que crea una colección de profesores de muestra.
    public static function crearProfesoresdeMuestra(): array {
        $profesor1 = new Profesor(1, "Steve Wozniak", "steve@apple.com", "DWES");
        $profesor2 = new Profesor(2, "Ada Lovelace", "ada@gmail.com", "DIW");
        $profesor3 = new Profesor(3, "Taylor Otwell", "taylor@laravel.com", "DWEC");
        $profesor4 = new Profesor(4, "Rasmus Lerdoff", "rasmus@php.com", "DAW");

        return [$profesor1, $profesor2, $profesor3, $profesor4];
}
}
?>