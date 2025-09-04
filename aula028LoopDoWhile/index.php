<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>

<body>
    <h1>Do While</h1>

    <?php

        // Variável de condição
        $x = 10;

        // O "DoWhile" ele vai exutar o bloco de códigos pelo menos uma vez mesmo que a condição seja false
        do {
            echo 'Entrou no do while';
        } while($x < 9);
    ?>
</body>

</html>