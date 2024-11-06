<?php
require_once 'clases/Miembro.php';
require_once 'clases/Alumno.php';
require_once 'clases/Profesor.php';
require_once 'clases/Asignatura.php';

$alumnos = Alumno::crearAlumnosdeMuestra();
echo "<h2>Alumnos</h2>
      <ul>";
      foreach ($alumnos as $alumno) {
          echo "<li>Nombre: {$alumno->getNombre()} {$alumno->getApellidos()}, Email: {$alumno->getEmail()}</li>";
      }
          echo "</ul>";
?>