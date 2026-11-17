<?php
$numeros = [2, 5, 2, 8, 5, 10, 8, 12];
$distintos = [];

foreach ($numeros as $numero) {
    $jaExiste = false;

    foreach ($distintos as $valor) {
        if ($numero == $valor) {
            $jaExiste = true;
            break;
        }
    }

    if (!$jaExiste) {
        $distintos[] = $numero;
    }
}

echo "Valores distintos: ";
foreach ($distintos as $numero) {
    echo $numero . " ";
}
echo PHP_EOL;
