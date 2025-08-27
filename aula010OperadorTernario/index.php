<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
</head>
<body>
    <h1>Operador ternário</h1>

    <?php 

        // Variável que armazena se o usuario tem o cartão da loja
        $usuario_possui_cartao_loja = true;

        // Variável armazena o valor da compra
        $valor_compra = 595;

        // Variável armazena o valor do frete
        $valor_frete = 50;

        // Variável armazena se o usuario recebeu o desconto ou não, iniciando com o valor true, caso não tenha recebido, muda para "false" que está dentro do "else"
        $recebeu_desconto_frete = true;

        // Operador ternário encadeado
        $valor_frete_aux = 
        // 1ª condição: Se o usuário tem cartão da loja E a compra for maior ou igual a 400
        $usuario_possui_cartao_loja == true && $valor_compra >= 400 
        ? 0 // então o frete sai de graça (0)

        // senão, verifica a próxima condição:
        : ($usuario_possui_cartao_loja == true && $valor_compra >= 300 
            ? 10 // se a compra for maior ou igual a 300, o frete custa 10

            // senão, verifica a próxima condição:
            : ($usuario_possui_cartao_loja == true && $valor_compra >= 100 
                ? 25 // se a compra for maior ou igual a 100, o frete custa 25
                : $valor_frete // caso contrário, mantém o valor normal do frete (50)
            )
        );


        $valor_frete = $valor_frete_aux;

    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
        <?= 
            // Verifica a variável, se for "true" exibe "SIM", se for "false", exibe "NÃO" 
            // <condição> ? true : false
            $usuario_possui_cartao_loja ? 'SIM' : 'NÂO';
        ?>
    </p>

    <!-- Exibindo o valor da compra -->
    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?
        <?php 

            // Verifica a variável, se for "true" exibe "SIM", se for "false", exibe "NÃO" e coloca dentro da variável "teste"
            // <condição> ? true : false
            $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';

            // Exibindo o resultado da variável "teste" na tela
            echo $teste;
        ?>
    </p>

    <!-- Exibindo o valor do frete -->
    <p>Valor do frete: <?= $valor_frete ?></p>
</body>
</html>