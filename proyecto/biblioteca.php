<?php 
//Creación del array de los libros.
$libros = [  
    "libro1" => [  
        "titulo" => "PHP para Principiantes",  
        "autor" => "Carlos Ruiz",  
        "precio" => 19.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro2" => [  
        "titulo" => "JavaScript Avanzado",  
        "autor" => "Laura García",  
        "precio" => 25.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro3" => [  
        "titulo" => "Algoritmos en Python",  
        "autor" => "Miguel Fernández",  
        "precio" => 29.99,  
        "categoria" => "Algoritmos"  
    ]  
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h2>Información de todos los libros</h2> <!-- Creación del título y la tabla -->
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>

        <?php foreach ($libros as $libro) { ?>
                <tr>
                    <td><?php echo $libro["titulo"]; ?></td>
                    <td><?php echo $libro["autor"]; ?></td>
                    <td><?php echo $libro["precio"]; ?>€</td>
                    <td><?php echo $libro["categoria"]; ?></td>
                </tr>
            <?php }
             ?>
    </table>
        <h2>Libros de la categoría "Desarrollo Web"</h2>
            <ol>
                <?php
                // Filtro de los libros de la categoría Desarrollo Web
                foreach ($libros as $libro) {
                    if ($libro["categoria"] === "Desarrollo web") {
                        echo "<li>" . $libro["titulo"] .  $libro["autor"] . "</li>";
                    }
                }
                ?>
            </ol>
            
    </body>
    </html>
