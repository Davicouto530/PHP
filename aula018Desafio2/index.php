<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto de renda</title>
</head>
<body>
    <h1>Imposto de renda</h1>

    <?php

        function calculaImpostoRenda($salario) {
            
            $imposto = 0;

            if($salario <= 1903){
                $imposto = 0;
                echo "O desconto de imposto de renda do salário $salario é: $imposto";
            } else if($salario > 1903 && $salario < 2826){
                $imposto = ($salario * 7.5 ) / 100;
                echo "O desconto de imposto de renda do salário $salario é: $imposto";
            } else if($salario >= 2826 && $salario < 3751){
                $imposto = ($salario * 15 ) / 100;
                echo "O desconto de imposto de renda do salário $salario é: $imposto";
            } else if($salario >= 3751 && $salario < 4664){
                $imposto = ($salario * 22.5 ) / 100;
                echo "O desconto de imposto de renda do salário $salario é: $imposto";
            } else if($salario > 4664){
                $imposto = ($salario * 27.5 ) / 100;
                echo "O desconto de imposto de renda do salário $salario é: $imposto";
            }
        }

       calculaImpostoRenda(1050);
    ?>
</body>
</html>