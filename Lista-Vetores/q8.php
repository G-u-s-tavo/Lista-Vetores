<?php
$numeros = [18, 4, 27, 9, 35, 12, 2, 41, 16, 7];

$maior = $numeros[0];
$menor = $numeros[0];

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }

    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
}

echo "Maior valor: $maior" . PHP_EOL;
echo "Menor valor: $menor" . PHP_EOL;
