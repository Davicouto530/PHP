<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e decremento</title>
</head>
<body>
    <h1>Incremento e decremento</h1>

    <h3>Pós-incremento</h3>
    <?php 
        $a = 7;

        echo "O valor contido em a é: $a <br/>";

        // Fazendo o pós-incremento de uma unidade na variável "a", mas esse incremento só vai aparecer no próximo
        echo 'O valor contido em a após o pós-incremento é: ' . $a++ . ' <br/>';

        // Só vai aparecer aqui
        echo "O valor atualizado é: $a <br/>";
    ?>

    <h3>Pré-incremento</h3>
    <?php 
        $a = 7;

        echo "O valor contido em a é: $a <br/>";

        // Fazendo o pré-incremento de uma unidade na variável "a", mas esse incremento já vai aparecer por que foi feito antes de exibir a mensagem.
        echo 'O valor contido em a após o pré-incremento é: ' . ++$a . ' <br/>';

    ?>

    <h3>Pós-decremento</h3>
    <?php 
        $a = 7;

        echo "O valor contido em a é: $a <br/>";

        // Fazendo o pós-decremento de uma unidade na variável "a", mas esse decremento só vai aparecer no próximo
        echo 'O valor contido em a após o pós-decremento é: ' . $a-- . ' <br/>';

        // Só vai aparecer aqui
        echo "O valor atualizado é: $a <br/>";
    ?>

    <h3>Pré-decremento</h3>
    <?php 
        $a = 7;

        echo "O valor contido em a é: $a <br/>";

        // Fazendo o pré-decremento de uma unidade na variável "a", mas esse decremento já vai aparecer por que foi feito antes de exibir a mensagem.
        echo 'O valor contido em a após o pré-decremento é: ' . --$a . ' <br/>';

        $b = 3;
        $b++;

        echo $b;
    ?>
</body>
</html>