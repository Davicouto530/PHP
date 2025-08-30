<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array prática</title>
</head>

<body>
    <h1>Array prática</h1>

    <?php

        // Arrays sequenciais (numéricos)

        // Jeito 1 de fazer
        // $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

        // Atribuindo um novo valor dentro do array
        $lista_frutas[] = 'Abacaxi';

        // Exibindo o array já formatado com a tag "pre" do html
        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';

        echo '<br/>';

        // Exibindo o array já formatado com a tag "pre" do html
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        echo '<br/>';

        // Recuperando um valor especifico do array
        echo $lista_frutas[2];
        echo '<hr/>';

        // ----- Arrays associativos -----

        // No array associativo, você mesmo define qual vai ser o indice daquele valor.
        // 'Pera' vai ter como indice o 'a', para associar usa o "=>".
        $lista_frutas2 = [
            'a' => 'Pera', 
            'b' => 'Manga', 
            'x' => 'Jabuticaba', 
            '2' => 'Melancia'
        ];

        // Atribuindo um novo valor dentro do array e dando o indice "w"
        $lista_frutas2['w'] = 'Abacaxi';

        // Exibindo o array já formatado com a tag "pre" do html
        echo '<pre>';
            var_dump($lista_frutas2);
        echo '</pre>';

        // Recuperando um valor especifico do array pelo indice dado
        echo $lista_frutas2['x'];
    ?>
</body>

</html>