<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 04 - Matheus Jovem Seixas - 2010478300050</title>
        <style>
            body{
                font-family: Verdana;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<h1>3DAW</h1>";
            echo "<h2>Exercício 04</h2>";

            $variavel = "esta e uma string";
            var_dump($variavel);

            $variavelInt = 7;
            var_dump($variavelInt);

            $variavelFloat = 5.789;
            var_dump($variavelFloat);

            $variavelBool = true;
            var_dump($variavelBool);

            echo"<br>";
            echo $variavel;
            echo"<br>";
            echo "Variavel tipo int: " . $variavelInt;
            echo"<br>";
            echo "Variavel tipo float: " . $variavelFloat;
            echo"<br>";
            echo "Variavel tipo boolean: " . $variavelBool;

            if ($variavelBool){
                echo"<br>";
                echo "Variavel tipo Boolean: true";
            }else{
                echo"<br>";
                echo "Variavel tipo Boolean: false";
            }
        ?>
    </body>
</html>
