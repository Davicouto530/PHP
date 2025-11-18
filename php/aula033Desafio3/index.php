<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
</head>

<body>
    <h1>Números aleatórios</h1>

    <?php

        // ----- DESAFIO -----
        /*
        Crie um script capaz de produzir, através de uma laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos.
        */

        // Array que os valores serão armazenados
        $numeros = [];

        // Percorrendo o array até ser menor que 6
        for($x = 0; $x < 6; $x++){

            // Gerando números aleatórios entre 1 e 60 e colocando na variável "num_alet"
            $num_aleat = rand(1, 60); 

            // Verificando se os valores gerados já não estão dentro do array
            if(!in_array($num_aleat, $numeros)) {

                // Se não tiverem, armazena no array o número aleatório
                $numeros[] = $num_aleat;
            }
        }

        echo '<pre>';
            print_r($numeros);
        echo '</pre>';

    ?>
</body>

</html>