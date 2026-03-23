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
    if ($imc < $min - 2) {
        echo "Classificacao: abaixo da media";
    } elseif ($imc < $min) {
        echo "Classificacao: um pouco abaixo da media";
    } elseif ($imc >= $min && $imc <= $max) {
        echo "Classificacao: na media";
    } elseif ($imc <= $max + 3) {
        echo "Classificacao: um pouco acima da media";
    } else {
        echo "Classificacao: acima da media";
    }
}
?>
</body>
</html>
