<?php
$numeros = [5, 10, 15, 20, 25];
$soma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

echo "Soma dos elementos: $soma" . PHP_EOL;
