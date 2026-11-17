<?php
$numeros = [3, 5, 3, 8, 5, 3, 9, 8, 5, 2];
$contados = [];

foreach ($numeros as $numero) {
    $jaContado = false;

    foreach ($contados as $valor) {
        if ($valor == $numero) {
            $jaContado = true;
            break;
        }
    }

    if (!$jaContado) {
        $frequencia = 0;

        foreach ($numeros as $item) {
            if ($item == $numero) {
                $frequencia++;
            }
        }

        echo "O número $numero aparece $frequencia vez(es)." . PHP_EOL;
        $contados[] = $numero;
    }
}
