<?php
$notas = [7.0, 8.5, 6.0, 9.0, 5.5, 10.0, 7.5, 8.0];
$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);
echo "Média da turma: " . number_format($media, 2, ",", ".") . PHP_EOL;
echo "Notas acima da média:" . PHP_EOL;

foreach ($notas as $nota) {
    if ($nota > $media) {
        echo $nota . PHP_EOL;
    }
}
