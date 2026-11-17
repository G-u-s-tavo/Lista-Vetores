<?php
$notas = [8.0, 7.5, 9.0, 6.5, 10.0];
$soma = 0;

for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i];
}

$media = $soma / count($notas);
echo "Média: " . number_format($media, 2, ",", ".") . PHP_EOL;
