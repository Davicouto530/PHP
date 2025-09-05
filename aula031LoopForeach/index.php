<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Foreach</title>
</head>

<body>
    <h1>Loop Foreach</h1>

    <?php

        // Ele automaticamente para de percorrer quando vê que o obj/array foi todo percorrido, sem precisar de uma condição de parada 
        $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

        echo '<pre>';
            print_r($itens);
        echo '</pre>';

        // O primeiro parâmetro é o array que será percorrido, o "as" indica a variável que recebera os valores do array dentro do foreach, que é a "$item"
        foreach($itens as $item) {

            // Exibindo todos os elementos do array
            echo $item;

            // Verificando se o item do array é uma mesa
            if($item == 'mesa'){
                // Se for uma mesa, vai exibir essa mensagem do lado do item
                echo ' (*Compre uma mesa e ganha 25% de desconto na compra de quatro cadeiras)';
            }

            echo '<br/>';
        }
    ?>
</body>

</html>