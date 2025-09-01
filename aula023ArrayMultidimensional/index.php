<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional</title>
</head>

<body>
    <h1>Array multidimensional</h1>

    <?php

        // Array multidimensional

        // Definindo o array que vai armazenar os outros array
        $lista_coisas = [];

        // Dentro do array "lista_coisas", estamos criando um array "frutas" associativo.
        $lista_coisas['frutas'] = [
            1 => 'Banana',
            2 => 'Maçã', 
            3 => 'Morango', 
            4 => 'Uva'
        ];

        // Dentro do array "lista_coisas", estamos criando um array "pessoas" associativo.
        $lista_coisas['pessoas'] = [
            1 => 'João',
            2 => 'José', 
            3 => 'Maria'
        ];

        // Exibindo o array já formatado com a tag "pre" do html   
        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';

        echo '<hr/>';

        // Recuperando um valor do array frutas, que está dentro do array "lista_coisas" passando o indice do que quer
        echo $lista_coisas['frutas'][3];

        echo '<br/>';

        // Recuperando um valor do array pessoas, que está dentro do array "lista_coisas" passando o indice do que quer
        echo $lista_coisas['pessoas'][1];
    ?>
</body>

</html>