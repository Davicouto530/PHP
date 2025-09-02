<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, null e empty</title>
</head>

<body>
    <h1>False, null e empty</h1>

    <?php

        // false (true/false) - é tipo boolean, só pode ser verdadeiro ou falso
        // null e empty - são valores especiais, usados pra indicar vazio, nada

        // Criando as variáveis que a gente vai testar
        $funcionario1 = null; // essa aqui não tem valor nenhum, é null
        $funcionario2 = ''; // essa aqui é string vazia, tipo ""
        $funcionario3 = false; // essa aqui já começa falsa, boolean false

        // Testando se a variável é null
        // is_null() - essa função checa se a variável é null e devolve true ou false
        if(is_null($funcionario1)) {
            // se cair aqui é pq a variável realmente tá null
            echo 'Sim, a variável é null';
        } else {
            // se cair aqui é pq não é null
            echo 'Não, a variável não é null';
        }

        echo '<br/>';

        // Testando se a variável está vazia, null ou false
        // empty() - essa função olha se a variável tá vazia, null, false, zero ou string vazia
        if(empty($funcionario2)) {
            // se cair aqui, é pq a variável tá vazia/null/false/0
            echo 'Sim, a variável está vazia';
        } else {
            // se cair aqui, é pq a variável tem algum valor diferente
            echo 'Não, a variável não está vazia';
        }
    ?>
</body>

</html>