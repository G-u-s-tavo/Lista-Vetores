<?php
$numeros = [2, 3, 4, 5, 9, 11, 15, 17, 20, 23];

echo "Números primos: ";

foreach ($numeros as $numero) {
    if ($numero < 2) {
        continue;
    }

    $ehPrimo = true;

    for ($divisor = 2; $divisor < $numero; $divisor++) {
        if ($numero % $divisor == 0) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        echo $numero . " ";
    }
}

echo PHP_EOL;
