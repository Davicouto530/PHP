<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array métodos de pesquisa</title>
</head>

<body>
    <h1>Array métodos de pesquisa</h1>

    <?php

        // Duas funções que são nativas do php para lidar com pesquisa em arrays
        // in_array()
        // array_search()

        // ----- in_array() ----- 
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        // in_array() -> retorna true ou false para a existência do que está sendo procurado.
        // O primeiro parâmetro é o que estamos procurando no array, o segundo parâmetro é o array em que estamos pesquisando.
        // true -> texto = 1
        // false -> texto = vazio
        // Colocando o retorno da pesquisa dentro da variável "existe"
        $existe = in_array('Maçã', $lista_frutas);
        
        // Verificando se o retorno da variável boolean "$existe" é true ou false
        if($existe) {
            // Se for true, exibe essa mensagem
            echo 'Sim, o valor pesquisado existe no array <br/>';
        } else {
            // Se for false, exibe essa mensagem
            echo 'Não, o valor pesquisado não existe no array <br/>';
        }

        // ----- array_search() -----

        // array_search() -> retorna o indice do valor pesquisado, caso ele exista, caso ele não exista, retorna vazio
        // true -> texto = indice
        // null -> texto = vazio
        $existe2 = array_search('Uva', $lista_frutas);

        // Verificando se o retorno da variável boolean "$existe2" é diferente de "null"
        if($existe2 != null) {
            // Se for diferente de null, exibe essa mensagem
            echo 'Sim, o valor pesquisado existe no array <br/>';
        } else {
            // Se for igual a null, exibe essa mensagem
            echo 'Não, o valor pesquisado não existe no array <br/>';
        }

        echo '<hr/>';

        // ---- Pesquisando em array multidimensional -----
        echo 'Pesquisando em array multidimensional';

        echo '<br/>';

        // Criando o array "lista_coisas", e dentro dele criando o indice "frutas", que dentro de frutas está sendo colocado o array que está na variável "lista_frutas".
        // Criando o indice "pessoa", e dentro dele está sendo colocado o array com o nome das pessoas.
        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['Jão', 'Maria']
        ];

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';

        // Pesquisando
        // O primeiro parâmetro é o que vai ser pesquisado, o segundo parâmetro é o array que vai ser pesquisado indicando o indice do array de dentro que vai ser pesquisado.
        echo in_array('Uva', $lista_coisas['frutas']);
    ?>
</body>

</html>