<?php
$numeros = [2, 5, 7];

foreach ($numeros as $numero) {
    echo "Tabuada do $numero:" . PHP_EOL;

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
    }

    echo PHP_EOL;
}
