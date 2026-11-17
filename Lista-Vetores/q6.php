<?php
$numeros = [3, 8, 12, 5, 7, 10, 14, 9, 2, 11];
$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Quantidade de pares: $pares" . PHP_EOL;
echo "Quantidade de ímpares: $impares" . PHP_EOL;
