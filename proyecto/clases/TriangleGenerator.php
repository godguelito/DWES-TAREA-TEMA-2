<?php

class TriangleGenerator {
    public function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return "";
        }
        $triangle = "<pre>"; 
        for ($i = 0; $i < $altura; $i++) {
                $spaces= $altura -$i-1;
                $asteriscos=2*$i+1;    

            $lines= str_repeat(" ",$spaces) . str_repeat("*",$asteriscos);

            $triangle .= "$lines\n";
        }
            $triangle .= "</pre>";

            return $triangle; // Se retorna el triangulo 
    }
}
?>