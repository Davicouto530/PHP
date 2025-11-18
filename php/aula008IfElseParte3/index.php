<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If/Else praticando</title>
</head>
<body>
    <h1>If/Else praticando</h1>

    <?php 

        // Variável que armazena se o usuario tem o cartão da loja
        $usuario_possui_cartao_loja = true;

        // Variável armazena o valor da compra
        $valor_compra = 225;

        // Variável armazena o valor do frete
        $valor_frete = 50;

        // Variável armazena se o usuario recebeu o desconto ou não
        $recebeu_desconto_frete = false;

        // Verificando se o usuario possui o cartão da loja e se o valor da compra é maior ou igual a 100
        if($usuario_possui_cartao_loja == true && $valor_compra >= 100){

            $valor_frete = 0;
            // Se o usuario possuir o cartão da loja e a compra for maior ou igual a 100, o frete vai ser de graça, atribuindo o valor 0 a variável "valor_frete".

            $recebeu_desconto_frete = true;
            // Atribundo o valor de true para a variável, por que o usuario recebeu o desconto.
        }

    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
        <?php 

            // Verificando se o usuario possui o cartão da loja, se for igual a "true", vai exibir a mensagem "SIM", se não, vai exibir a mensagem "NÂO" no else
            if($usuario_possui_cartao_loja == true){
                echo 'SIM';
            }else {
                echo 'NÂo';
            }
        ?>
    </p>

    <!-- Exibindo o valor da compra -->
    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?
        <?php 

            // Verificando se o usuario recebeu o desconto no frete, se for igual a "true", vai exibir a mensagem "SIM", se não, vai exibir a mensagem "NÂO" no else
            if($recebeu_desconto_frete == true){
                echo 'SIM';
            }else {
                echo 'NÂo';
            }
        ?>
    </p>

    <!-- Exibindo o valor do frete -->
    <p>Valor do frete: <?= $valor_frete ?></p>
</body>
</html>