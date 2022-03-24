<?php
    switch ($_POST["operacao"]) {
        case "Somar":
            $resultado = $_POST["numero1"] + $_POST["numero2"];
            break;
        case "Subtrair":
            $resultado = $_POST["numero1"] - $_POST["numero2"];
            break;
        case "Multiplicar":
            $resultado = $_POST["numero1"] * $_POST["numero2"];
            break;
        case "Dividir":
            $resultado = $_POST["numero1"] / $_POST["numero2"];
            break;
        case "Exponencial":
            $resultado = $_POST["numero1"] ** $_POST["numero2"];
            break;
        case "Resto de Divisao":
            $resultado = $_POST["numero1"] % $_POST["numero2"];
            break;
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 13 - Matheus Jovem Seixas - 2010478300050</title>
        <style>
            body{
                text-align: center;
                font-family: Verdana;
            }
        </style>
    </head>
    <body>
        <h1>3DAW</h1>
        <h2>Exercício 13 - Form Operacoes</h2>

        <form action="ex13_soma.php" method="post">
            <label for="numero1">Número 1:</label><br>
            <input type="number" id="numero1" name="numero1" value="0"><br><br>
            <label for="numero2">Número 2:</label><br>
            <input type="number" id="numero2" name="numero2" value="0"><br><br>
            Escolha a Operação = <input list="operacao" name="operacao">
            <datalist id="operacao">
                <option value="Somar">
                <option value="Subtrair">
                <option value="Multiplicar">
                <option value="Dividir">
                <option value="Exponencial">
                <option value="Resto de Divisao">
            </datalist>
            <br><br>
            Resultado = <?php echo $resultado; ?> <br><br>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
