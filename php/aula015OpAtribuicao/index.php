<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <h1>Operadores de atribuição</h1>

    <?php 

        // =
        // +, -, *, /, %
        
        $x = 10;
        $y = 8;

        // Modo convencional
        $x = $x + 5;

        // Modo de atribuição
        // $x += 5;
        $x += $y;

        $y *= $x;

        echo $x;

        echo '<br/>';

        echo $y;
    ?>
</body>
</html>