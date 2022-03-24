<?php
    $resultado = $_GET["numero1"] + $_GET["numero2"];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 12 - Matheus Jovem Seixas - 2010478300050</title>
        <style>
            body{
                text-align: center;
                font-family: Verdana;
            }
        </style>
    </head>
    <body>
        <h1>3DAW</h1>
        <h2>Exercício 13 - Form Soma </h2>

        <form action="ex13_soma.php" method="get">
            <label for="numero1">Número 1:</label><br>
            <input type="number" id="numero1" name="numero1" value="0"><br>+<br>
            <label for="numero2">Número 2:</label><br>
            <input type="number" id="numero2" name="numero2" value="0"><br><br>
            Resultado = <?php echo $resultado; ?> <br><br>
            <input type="submit" value="Somar">
        </form>
    </body>
</html>