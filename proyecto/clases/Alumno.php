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
    

?>