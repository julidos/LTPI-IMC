<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de Média</h1>
    <form method="post" action="">
        Nome do Aluno: <input type="text" name="nome"><br>
        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        
        $media = ($nota1 + $nota2) / 2;
        $media = round($media, 2);
        
        echo "<h2>Resultado</h2>";
        echo "Aluno: $nome<br>";
        echo "Média: $media<br>";
        
        if ($media < 4) {
            echo "Situação: Reprovado";
        } elseif ($media >= 4 && $media < 6) {
            echo "Situação: Exame final";
        } else {
            echo "Situação: Aprovado";
        }
    }
    echo "<br><br>";
    echo "<a href=\"index.html\">Voltar ao Index</a>";
    ?>
</body>
</html>

