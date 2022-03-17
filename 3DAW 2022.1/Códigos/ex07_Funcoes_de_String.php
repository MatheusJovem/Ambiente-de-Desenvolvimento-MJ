<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 07 - Matheus Jovem Seixas - 2010478300050</title>
        <style>
            body{
                text-align: center;
                font-family: Verdana;
            }

        </style>
    </head>
    <body>
        <?php
            echo "<h1>3DAW</h1>";
            echo "<h2>Exercício 07 - Funções de String</h2>";

            $variavel = "Esta e uma string";
            echo $variavel;
            echo "<br><br>";
            echo "Quantidade de characteres: " . strlen($variavel);
            echo "<br>";
            echo "Quantidade de palavras: " . str_word_count($variavel);
            echo "<br>";
            echo "Frase Invertida: " . strrev($variavel);
            echo "<br><br>";
            echo "Mais informações em: "
        ?>
        <a href="https://www.php.net/manual/en/book.strings.php">Documentação de Strings PHP.net</a>
    </body>
</html>
