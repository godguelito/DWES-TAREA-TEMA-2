<?php
require_once 'clases/Miembro.php';
require_once 'clases/Alumno.php';
require_once 'clases/Profesor.php';
require_once 'clases/Asignatura.php';

//Se muestra la colección de alumnos.
$alumnos = Alumno::crearAlumnosdeMuestra();
echo "<h2>Alumnos</h2>
      <ul>";
      foreach ($alumnos as $alumno) {
          echo "<li>Nombre: {$alumno->getNombre()} {$alumno->getApellidos()}, Email: {$alumno->getEmail()}</li>";
      }
          echo "</ul>";

//Se muestra la colección de profesores.
$profesores= Profesor::crearProfesoresdeMuestra();
echo "<h2>Profesores</h2>
      <ul>";
      foreach ($profesores as $profesor) {
        echo "<li>Nombre: {$profesor->getNombre()}, Email: {$profesor->getEmail()}</li>";
    }
        echo "</ul>";
    
$asignaturas= Asignatura::crearAsignaturasdeMuestra();
    echo "<h2>Asignaturas</h2>
      <ul>";
      foreach ($asignaturas as $asignatura) {
        echo "<li>Nombre: {$asignatura->getNombre()}, Créditos: {$asignatura->getCreditos()}</li>";
    }
?>