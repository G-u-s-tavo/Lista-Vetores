<?php
$numeros = [12, 45, 7, 32, 45, 18, 9, 27, 32, 40];

$maior = $numeros[0];
$segundoMaior = null;

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $segundoMaior = $maior;
        $maior = $numero;
    } elseif ($numero < $maior && ($segundoMaior === null || $numero > $segundoMaior)) {
        $segundoMaior = $numero;
    }
}

echo "Maior valor: $maior" . PHP_EOL;
echo "Segundo maior valor distinto: $segundoMaior" . PHP_EOL;
