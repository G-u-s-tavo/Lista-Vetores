<?php
$nomes = ["Ana", "Bruno", "Carla", "Daniel", "Eduarda",
          "Felipe", "Gabriel", "Helena", "Igor", "Julia"];
$notas = [8.5, 6.0, 9.0, 5.5, 7.0, 4.5, 8.0, 6.5, 9.5, 7.5];

$soma = 0;
$maiorNota = $notas[0];
$indiceMaiorNota = 0;
$aprovados = 0;
$reprovados = [];

for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i];

    if ($notas[$i] > $maiorNota) {
        $maiorNota = $notas[$i];
        $indiceMaiorNota = $i;
    }

    if ($notas[$i] >= 7) {
        $aprovados++;
    } else {
        $reprovados[] = $nomes[$i];
    }
}

$media = $soma / count($notas);

echo "Média da turma: " . number_format($media, 2, ",", ".") . PHP_EOL;
echo "Aluno com maior nota: " . $nomes[$indiceMaiorNota] .
     " (" . $maiorNota . ")" . PHP_EOL;
echo "Quantidade de aprovados: $aprovados" . PHP_EOL;
echo "Alunos reprovados:" . PHP_EOL;

foreach ($reprovados as $nome) {
    echo $nome . PHP_EOL;
}
