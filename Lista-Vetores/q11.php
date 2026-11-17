<?php
$numeros = [4, 8, 12, 16, 20, 24];

echo "Vetor na ordem inversa: ";
for ($i = count($numeros) - 1; $i >= 0; $i--) {
    echo $numeros[$i] . " ";
}
echo PHP_EOL;
