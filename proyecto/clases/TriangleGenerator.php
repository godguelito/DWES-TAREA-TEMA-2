<?php

class TriangleGenerator {
    public function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return "";
        }
        $triangle = ""; 
        for ($i = 1; $i <= $altura; $i++) {
            for ($j = 1; $j <= $altura - $i; $j++) {
                $triangle .= str_repeat("&nbsp;", $altura -$i);
            }
            for ($k = 1; $k <= ($i * 2) - 1; $k++) {
                $triangle .= str_repeat("*", ($i * 2) - 1);
            }
            $triangle .= "<br>";
        }

        return $triangle; // Se retorna el triangulo pero ya con lo correspondientes
    }
}

?>