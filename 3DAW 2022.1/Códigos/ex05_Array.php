<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 05 - Matheus Jovem Seixas - 2010478300050</title>
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
            echo "<h2>Exercício 05 - Array</h2>";

            $disciplinas = array("3daw", "3alg", "3rsd");
            var_dump($disciplinas);

            echo "Disciplinas = [";

            for($cont = 0; $cont < 3; $cont++){
                echo $disciplinas[$cont];
                while($cont != 2){
                    echo ", ";
                    break;
                }
            }

            echo "]";
        ?>
    </body>
</html>
