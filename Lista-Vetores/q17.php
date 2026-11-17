<?php
$numeros = [34, 12, 5, 27, 19, 2, 41, 8, 16, 30];

// Ordenação por comparação e troca (bubble sort).
for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = 0; $j < count($numeros) - 1 - $i; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temporario = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temporario;
        }
    }
}

echo "Ordem crescente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo PHP_EOL;
