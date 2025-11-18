<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>
<body>
    <h1>Desafio 1</h1>

    <?php 

        $idade = 18;
        $peso = 54;

        if(($idade >= 16 && $idade <= 69) && $peso >= 50){
            echo 'Atende os requisitos';
        } else {
            echo 'Não atende os requisitos';
        }

    ?>
</body>
</html>