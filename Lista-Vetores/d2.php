<?php
$vetor1 = [2, 4, 6, 8, 10, 12];
$vetor2 = [1, 2, 3, 6, 9, 12];
$comuns = [];

foreach ($vetor1 as $numero1) {
    $existeNoSegundo = false;

    foreach ($vetor2 as $numero2) {
        if ($numero1 == $numero2) {
            $existeNoSegundo = true;
            break;
        }
    }

    if ($existeNoSegundo) {
        $jaAdicionado = false;

        foreach ($comuns as $valor) {
            if ($valor == $numero1) {
                $jaAdicionado = true;
                break;
            }
        }

        if (!$jaAdicionado) {
            $comuns[] = $numero1;
        }
    }
}

echo "Valores presentes nos dois vetores: ";
foreach ($comuns as $numero) {
    echo $numero . " ";
}
echo PHP_EOL;
