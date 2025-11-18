<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática de funções</title>
</head>
<body>
    <h1>Prática de funções</h1>

    <?php

        // Void: Função que não tem um retorno, só faz uma lógica
        // Definindo a função que mostrara uma mensagem
        function exibirBoasVindas() {
            echo "Bem vindo ao curso de PHP <br/>";
            // Mensagem que será exibida quando a função for chamada
        }

        // Chamando a função que irá exibir a msg e pode ser chamada quantas vezes necessário
        exibirBoasVindas();
        exibirBoasVindas();
        exibirBoasVindas();

        // Return: Função que tem um retorno para quem chamou
        // Definindo a função e passando os parâmetros para a função que irá calular
        function calcularAreaTerreno($largura, $comprimento) {
            
            // Variável que irá armazenar a conta entre "largura" e "comprimento"
            $area = $largura * $comprimento;

            // Retornando o resultado da conta que está armazenado na variável "area" quando a função for chamada.
            return $area;
        }

        // Chamando a função e passando os valores para os parâmetros da função, que esses valores serão caululados e retornados, colocando o resultado da chamada da função em uma variável 
        $resultado = calcularAreaTerreno(5,30);
        echo $resultado; // e exibindo esse resultado 
    ?>
</body>
</html>