<?php
function generarFibonacci($n) {
    $serie = [];

    // Casos base para los primeros términos de la serie
    if ($n >= 1) $serie[] = 0;
    if ($n >= 2) $serie[] = 1;

    // Generación de términos adicionales de la serie Fibonacci
    for ($i = 2; $i < $n; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }

    return $serie;
}

// Ejemplo de uso
$n = 10; // Cambia este valor para generar más o menos términos
$fibonacci = generarFibonacci($n);
echo implode(", ", $fibonacci);
?>