<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Loops</title>
</head>

<body>
    <h1>Praticando Loops</h1>

    <?php

        // Criando o array que será percorrido, e dentro criando um array para cada indice com titulo e conteudo
        $registros = [
            ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'], 
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'], 
            ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
            ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']
        ];

        echo '<pre>';
            print_r($registros);
        echo '</pre>';

        echo '<br/><hr/>';

        // Criando a variável de indice
        // $idx = 0;

        // count() -> conta a qauntidade de elementos de um array
        echo 'O array possui: ' . count($registros) . ' registros';

        /*
        // Vai executar enquanto "$idx" for menor que o tamanho do array
        while($idx < count($registros)){

            // Percorrendo cada indice do array e exibindo o valor de cada indice que tem o valor associativo "titulo"
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';

            // Percorrendo cada indice do array e exibindo o valor de cada indice que tem o valor associativo "conteudo"
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr/>';

            // Incrementando 1 a cada repetição
            $idx++;
        }
        */

        // Vai percorrer enquanto "$idx" for menor que o tamanho do array
        for($idx = 0; $idx < count($registros); $idx++) {

            // Percorrendo cada indice do array e exibindo o valor de cada indice que tem o valor associativo "titulo"
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';

            // Percorrendo cada indice do array e exibindo o valor de cada indice que tem o valor associativo "conteudo"
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr/>';
        }
    ?>
</body>

</html>