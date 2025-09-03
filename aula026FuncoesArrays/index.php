<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para arrays</title>
</head>

<body>
    <h1>Funções nativas para arrays</h1>

    <?php

        // ----- is_array() -----

        $array = 'String';

        // is_array(array) -> Verifica se o parâmetro é um array e retorna true ou false
        $retorno = is_array($array);

        // Verifica se a variável "retorno" é true ou false
        if($retorno) {
            // se for true, exibe essa msg
            echo 'Sim, é um array <br/>';
        } else {
            // se for false, exibe essa msg
            echo 'Não, não é um array <br/>';
        }

        // ----- array_keys() -----

        // Array que será testado na função
        $array2 = [1 => 'a', 7 => 'b', 18 => 'c'];

        // array_keys(array) -> Retorna todas as chaves de um array
        $chave_array = array_keys($array2);

        // Exibindo o array só com as chaves
        echo '<pre>';
            print_r($chave_array);
        echo '</pre>';

        // ----- sort() -----

        // Array que será ordenado
        $array3 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];

        // sort(array) -> Ordena um array e reajusta seus indices, ele retorna true ou false
        sort($array3);

        // Exibindo o array ordenado
        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        // ----- asort() -----

        // Array que será ordenado
        $array4 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];

        // asort(array) -> Ordena um array preservando os indices
        asort($array4);

        // Exibindo o array ordenado
        echo '<pre>';
            print_r($array4);
        echo '</pre>';

        // ----- count() -----
        
        // Array que será contado
        $array5 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];

        // Exibindo o array
        echo '<pre>';
            print_r($array5);

            // count(array) -> Conta a quantidade de elementos de um array
            echo count($array5);
        echo '</pre>';

        // ----- array_merge() -----

        // Criando os arrays que serão conectados
        $arraySist = ['osx', 'windows'];
        $arrayLinux = ['linux'];
        $arraySola = ['solaris'];

        // array_merge(array) -> Junta um ou mais arrays em um só
        $novo_array = array_merge($arraySist, $arrayLinux, $arraySola);

        // Exibindo o array que juntou todos
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';

        // ----- explode() -----

        // String que será dividida
        $string = '26/04/2018';

        // explode(array) -> Divide uma string baseada em um delimitador e transforma em um array
        // O primeiro parâmetro é o delimitador, aonde que vai ser dividido, e o segundo parâmetro é a string aonde vai ser feita
        $array_retorno = explode('/', $string);

        // Exibindo o array da string dividida
        echo '<pre>';
            print_r($array_retorno);

            // Pegando os indices do array aonde está dividida a string, e concatenando com "-"
            echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
        echo '</pre>';

        // ----- implode() -----

        $array6 = ['a', 'b', 'x', 'y']; // a,b,x,y

        // implode(array) -> Junta elementos de um array e retorna em uma string 
        // O primeiro parâmetro é o que quer colocar entre cada indice, e o segundo parâmetro é o array que será feito
        $string_retorno = implode(',', $array6);

        // exibindo a string
        echo $string_retorno;
    ?>
</body>

</html>