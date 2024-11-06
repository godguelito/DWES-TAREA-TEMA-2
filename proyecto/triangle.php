<?php
require_once 'clases/TriangleGenerator.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
    <style>
        body{
            font-family:monospace;
        }
        </style>
</head>
<body>
<?php
//Ejemplo de uso con altura 6.
$triangleGenerator = new TriangleGenerator();
echo $triangleGenerator->generateTriangle(6); //Prueba con la altura 6.
?>
</body>
</html>

