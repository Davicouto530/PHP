<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php 

        // O "define()" é uma função que serve para criar variáveis constantes.
        // Tem que passar dois parâmetros para a função de constantes. O primeiro é o nome que vai ser a constante "BD_URL", e o segundo é o valor que vai dentro dela "endereco_bd_dev"
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        // Recuperando os valores das constantes
        // Não precisa usar o "$" na frente da constante para recuperar ela
        echo BD_URL . '<br/>';
        echo BD_USUARIO . '<br/>';
        echo BD_SENHA . '<br/>';

    ?>

</body>
</html>