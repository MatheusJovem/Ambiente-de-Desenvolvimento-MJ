<?php
    function calculadora($operacao, $numero1, $numero2){
        switch ($operacao) {
            case "Somar":
                $resultado = $numero1 + $numero2;
                break;
            case "Subtrair":
                $resultado = $numero1 - $numero2;
                break;
            case "Multiplicar":
                $resultado = $numero1 * $numero2;
                break;
            case "Dividir":
                $resultado = $numero1 / $numero2;
                break;
            case "Exponencial":
                $resultado = $numero1 ** $numero2;
                break;
            case "Resto de Divisao":
                $resultado = $numero1 % $numero2;
                break;
        }
        return $resultado;
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 14 - Matheus Jovem Seixas - 2010478300050</title>
        <style>
            body{
                text-align: center;
                font-family: Verdana;
            }
        </style>
    </head>
    <body>
        <h1>3DAW</h1>
        <h2>Exercício 14 - Form Funcao</h2>

        <form action="ex13_Form_Funcao.php" method="post">
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
            Resultado = <?php echo calculadora($_POST["operacao"], $_POST["numero1"], $_POST["numero2"]); ?> <br><br>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
