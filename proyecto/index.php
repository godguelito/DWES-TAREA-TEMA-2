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
    
//Se muestra la colección de asignaturas.
$asignaturas= Asignatura::crearAsignaturasdeMuestra();
    echo "<h2>Asignaturas</h2>
      <ul>";
      foreach ($asignaturas as $asignatura) {
        echo "<li>Nombre: {$asignatura->getNombre()}, Créditos: {$asignatura->getCreditos()}</li>";
    }
    echo "</ul>";

//Alumnos que sean menores o igual a 23 años de edad.
$alumnosMenoresDe23 = array_filter($alumnos, function($alumno) {
    return $alumno->getEdad() <= 23;});
    echo "<h2>Alumnos <= 23</h2>
          <ul>";
          foreach ($alumnosMenoresDe23 as $alumno) {
            echo "<li>Nombre: {$alumno->getNombre()} {$alumno->getApellidos()}, Email: {$alumno->getEmail()}</li>";
        }
        echo "</ul>";
?>