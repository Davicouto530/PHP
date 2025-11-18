<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Foreach</title>
</head>

<body>
    <h1>Praticando Foreach</h1>

    <?php

        // Array "funcionarios" que recebe outros 3 arrays dentro, com o nome, salário e a data de nascimento de cada funcionário
        $funcionarios = [
            ['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '26/07/1978'], 
            ['nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '06/03/1970'], 
            ['nome' => 'Júlia', 'salario' => 2200, 'data_nascimento' => '09/01/1987']
        ];

        echo '<pre>';
            print_r($funcionarios);
        echo '</pre>';

        // Percorrendo o array
        // O primeiro parâmetro é o array que será percorrido
        // Depois do "as" vem dois parâmetro, o primeiro "$idx" é a variável que vai receber os indices do array, e a "=>" indica o segundo parâmetro, que é a variável que vai receber os valores do array
        foreach($funcionarios as $idx => $funcionario){

            // Percorrendo os arrays que está dentro do array principal e pegando seus indices e valores
            foreach($funcionario as $idx2 => $valor){

                // Exibindo os valores que estão nos arrays de dentro
                echo "$idx2 - $valor <br/>";
            }

            echo "<hr/>";
        }
    ?>
</body>

</html>