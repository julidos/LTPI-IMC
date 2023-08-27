<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="">
        Peso (kg): <input type="text" name="peso"><br>
        Altura (m): <input type="text" name="altura"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = str_replace(",", ".", $_POST["peso"]);
        $altura = str_replace(",", ".", $_POST["altura"]);
        
        $imc = $peso / ($altura * $altura);
        $imc = round($imc, 2);
        
        echo "<h2>Resultado</h2>";
        echo "Seu IMC é: $imc<br>";
        
        if ($imc < 17) {
            echo "Situação: Muito abaixo do peso";
        } elseif ($imc >= 17 && $imc < 18.5) {
            echo "Situação: Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "Situação: Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "Situação: Acima do peso";
        } elseif ($imc >= 30 && $imc < 35) {
            echo "Situação: Obesidade I";
        } elseif ($imc >= 35 && $imc < 40) {
            echo "Situação: Obesidade II (severa)";
        } else {
            echo "Situação: Obesidade III (mórbida)";
        }
    }
    echo "<br><br>";
    echo "<a href=\"index.html\">Voltar ao Index</a>";
    ?>
</body>
</html>