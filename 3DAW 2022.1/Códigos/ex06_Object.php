<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>3DAW - Exercício 06 - Matheus Jovem Seixas - 2010478300050</title>
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
            echo "<h2>Exercício 06 - Object</h2>";

            class Disciplina{
                public $nome;
                public $sigla;
                public $carga;
                public function __construct($nome, $sigla, $carga){
                    $this->nome = $nome;
                    $this->sigla = $sigla;
                    $this->carga = $carga;
                }
                public function getDisc(){
                    return  "Nome da Disciplina: " . $this->nome .
                            "; Sigla: " . $this->sigla .
                            "; Carga Horária: " . $this->carga . "<br>";

                }
            }

            $objDisciplina = new Disciplina("Desenvolvimento Web", "3DAW", "80");
            echo $objDisciplina->getDisc();
            echo"<br>";

            $objDisciplina2 = new Disciplina("Algebra Linear", "3ALG", "40");
            echo $objDisciplina2->getDisc();
            echo"<br>";

            $objDisciplina3 = new Disciplina("Redes e Sistemas", "3RSD", "140");
            echo $objDisciplina3->getDisc();

        ?>
    </body>
</html>
