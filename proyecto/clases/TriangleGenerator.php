<?php

class TriangleGenerator {
    public function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return "";
        }
        $triangle = ""; 
        for ($i = 1; $i <= $altura; $i++) {
            for ($j = 1; $j <= $altura - $i; $j++) {
                $triangle .= "&nbsp;";
            }
            for ($k = 1; $k <= ($i * 2) - 1; $k++) {
                $triangle .= "*";
            }
            $triangle .= "<br>";
        }

        return $triangle; // Se retorna el triangulo pero ya con lo correspondientes
    }
}

// Ejemplo de uso
$triangleGenerator = new TriangleGenerator();
echo $triangleGenerator->generateTriangle(7); //Ejemplo  pedido con la altura 7 
?>