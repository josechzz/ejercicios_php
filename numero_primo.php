<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false; // Los números menores o iguales a 1 no son primos
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible por algún número, no es primo
        }
    }
    return true; // Es primo si no tiene divisores
}

// Ejemplo de uso
$numero = 29;
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>
