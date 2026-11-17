<?php
$numeros = [10, 20, 30, 40, 50, 60, 70, 80];

$ultimo = $numeros[count($numeros) - 1];

for ($i = count($numeros) - 1; $i > 0; $i--) {
    $numeros[$i] = $numeros[$i - 1];
}

$numeros[0] = $ultimo;

echo "Vetor após deslocamento: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo PHP_EOL;
