<?php

class Alumno extends Miembro { //Creación de la clase hija Alumno
    private int $edad;
    private array $asignaturas;
    private bool $cursoAbonado;

    //Método constructor
    public function __construct(int $id, $nombre, $apellidos, $email, int $edad, array $asignaturas, bool $cursoAbonado) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        $this->asignaturas = [];
        $this->cursoAbonado = $cursoAbonado;
    }

}
?>