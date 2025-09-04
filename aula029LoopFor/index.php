<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>

<body>
    <h1>For</h1>

    <?php

        // Incrementando: Percorre enquanto a condição for "true", quando a condição for "false", interrompe o laço
        for($x = 1; $x <= 10; $x++) {

            // Verificando se "$x" é maior que "6"
            if($x > 6){
                // Se "$x" for maior que "6", interrompe o laço
                break;
            }

            echo "$x <br/>";
        }

        // Decrementando: Percorre enquanto a condição for "true", quando a condição for "false", interrompe o laço
        for($x = 10; $x > 0; $x--) {

            echo "$x <br/>";
        }
    ?>
</body>

</html>