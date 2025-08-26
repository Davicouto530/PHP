<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <?php 

        // Criando as variáveis que irão na concatenação
        $nome = 'Jorge';
        $cor = 'verde';
        $idade = 29;
        $atividade_preferida = 'futebol';

        // Fazendo a concatenação com o operador ponto "." 
        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de jogar ' . $atividade_preferida;

        echo '<br/> <br/>';

        // Fazendo a concatenação com as aspas duplas ("")
        echo "Olá $nome, vi que a sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de jogar $atividade_preferida"
    ?>

</body>
</html>