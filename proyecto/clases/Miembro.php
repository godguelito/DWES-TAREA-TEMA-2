<?php

abstract class Miembro {  //Creación de la clase abstracta Miembro
    protected int $id;
    protected $nombre;
    protected $apellidos;
    protected $email;

    //Método constructor
    public function __construct(int $id, $nombre, $apellidos, $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    //Getters y setters
    public function getId() : int {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    //Método toString
    public function __toString() {
        return "ID: ". $this->id. 
               "Nombre: ". $this->nombre. 
               "Apellidos: ". $this->apellidos. 
               "Email: ". $this->email;
    }
    
}

?>