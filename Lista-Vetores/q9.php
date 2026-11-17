<?php
$nomes = ["Ana", "Bruno", "Carla", "Daniel", "Eduarda", "Felipe", "Gabriel", "Helena"];
$pesquisa = "Carla";
$encontrado = false;

foreach ($nomes as $nome) {
    if (strtolower($nome) == strtolower($pesquisa)) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "$pesquisa foi encontrado(a) no vetor." . PHP_EOL;
} else {
    echo "$pesquisa não foi encontrado(a) no vetor." . PHP_EOL;
}
