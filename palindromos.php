<?php
function esPalindromo($cadena) {
    // Elimina espacios, signos de puntuación y convierte a minúsculas
    $cadena = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($cadena));

    // Compara la cadena con su reverso
    return $cadena === strrev($cadena);
}

// Ejemplos de uso
$texto1 = "Anita lava la tina";
$texto2 = "Hola Mundo";

echo esPalindromo($texto1) ? "Es un palíndromo" : "No es un palíndromo"; // Salida: Es un palíndromo
echo "\n";
echo esPalindromo($texto2) ? "Es un palíndromo" : "No es un palíndromo"; // Salida: No es un palíndromo
?>
