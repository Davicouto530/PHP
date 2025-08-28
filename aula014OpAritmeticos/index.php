<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>

    <?php 
        $num1 = 13;
        $num2 = 4;

        // Usando os parentese para a ordem de precedencia, aonde a conta será feito primeiro, depois será exibido.
        echo "A soma entre $num1 e $num2 é: " . ($num1 + $num2);

        echo "<br/>";

        // Subtração
        echo "A subtração entre $num1 e $num2 é: " . ($num1 - $num2);

        echo "<br/>";

        // Multiplicação
        echo "A multiplicação entre $num1 e $num2 é: " . ($num1 * $num2);

        echo "<br/>";

        // Divisão
        echo "A divisão entre $num1 e $num2 é: " . ($num1 / $num2);

        echo "<br/>";

        // Módulo - Só retorna o resto da divisão "1" ou "0", que é se a divisão é inteira ou não.
        echo "A módulo entre $num1 e $num2 é: " . ($num1 % $num2);
    ?>
</body>
</html>