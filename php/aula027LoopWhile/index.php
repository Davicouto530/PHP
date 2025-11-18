<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <h1>While</h1>

    <?php

        // Variável de condição
        $num = 1;

        echo '-- Início do loop -- <br/>';

        // Enquanto "$num" for menor ou igual que "10", vai repertir o bloco 
        while($num < 10) {

            // A cada repetição incrementa "1" na variável até chegar a "10"
            $num++;

            // Verificando se "$num" é igual a "2" ou igual a "10"
            if($num == 2 || $num == 10){
                // Se for igual a um dos dois, o continue serve para pular e não exibir
                continue;
            }

            echo "$num <br/>";

            // Verificando se "$num" é maior que "8"
            if($num > 9) {
                // Quando "$num" for maior que "8", o "break" para o loop
                break;
            }
        }

        echo '-- Fim do loop --';
    ?>
</body>

</html>