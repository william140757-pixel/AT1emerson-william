<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadoraIMC</title>
</head>
<body>
    <h2>calcular imc </h2>
    <form method="post">
        peso (kg): <input type="number" step="0.1" name="peso" required><br><br>
        alturam(m): <input type="number" step="0.01" name="altura" required><br><br>
        idade: <input type="number" name="idade" required><br><br>

<button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $idade = $_POST['idade'];

    $imc = $peso / ($altura * $altura);

    echo "<h3>Seu IMC: " . number_format($imc, 2) . "</h3>";

    // Ajuste leve por idade
    if ($idade < 25) {
        $min = 18.5;
        $max = 24.0;
    } elseif ($idade < 45) {
        $min = 19;
        $max = 25;
    } elseif ($idade < 65) {
        $min = 21;
        $max = 26;
    } else {
        $min = 23;
        $max = 28;
    }

    // Classificacao
 if ($imc < 16) {
    echo "Classificacao: Magreza grau III";
} elseif ($imc >= 16 && $imc <= 16.9) {
    echo "Classificacao: Magreza grau II";
} elseif ($imc >= 17 && $imc <= 18.4) {
    echo "Classificacao: Magreza grau I";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Classificacao: Eutrofia";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Classificacao: Pre-obesidade";
} elseif ($imc >= 30 && $imc <= 34.9) {
    echo "Classificacao: Obesidade moderada (grau I)";
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "Classificacao: Obesidade severa (grau II)";
} else {
    echo "Classificacao: Obesidade muito severa (grau III)";
}
}
?>
</body>
</html>
