<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para matemática</title>
</head>
<body>
    <h1>Funções nativas para matemática</h1>

    <?php

        // Variável que será testada
        $num = 7.3;

        // ceil() -> Arredonda o valor para cima
        echo ceil($num);

        echo '<hr/>';

        // floor() -> Arredonda o valor para baixo
        echo floor($num);

        echo '<hr/>';

        // round() -> Arredonda o valor com base nas casas decimais.
        // .0 e .4 -> baixo / .5 -> cima
        echo round($num);

        echo '<hr/>';

        // rand() -> Gera um número inteiro aleatório
        echo rand(10, 20); 
        // Colocando que só vai gerar números aleatórios entre 10 e 20

        echo '<br/>' . getrandmax(); 
        // Exibe o maior número que pode ser gerado no "rand" 

        echo '<hr/>';

        // sqrt() -> Retorna a raiz quadrada
        echo sqrt(10); 
    ?>
</body>
</html>