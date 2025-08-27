<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If/Else operadores lógicos</title>
</head>
<body>
    <h1>If/Else operadores lógicos</h1>

    <?php 

        /* 
            operador E (AND ou &&) - Retorna verdadeiro se todos os resultados das expressões forem verdeiros

            operador OU (OR ou ||) - Retorna verdadeiro se pelo menos um dos resultados das expressões for verdadeiro

            operador XOR (XOR) - Retorna verdadeiro se uma das expressões for verdeira e a outra falsa, ou vise-versa 

            operador negação (!) - Inverte o resultado retornado pela expressão 
        */

        // Operador E - f e v = falso
        if(2 !== 2 && 10 > 3) {
            echo 'Verdadeiro <br/>';
        } else {
            echo 'Falso <br/>';
        }

        // Operador OU - f ou v = verdeiro
        if(3 > 10 || 10 == 10) {
            echo 'Verdadeiro <br/>';
        } else {
            echo 'Falso <br/>';
        }

        // Operador XOR - f xor v = verdeiro
        // Se as duas forem verdeiras ou falso, retornará falso
        if(4 == 4 XOR 10 > 15) {
            echo 'Verdadeiro <br/>';
        } else {
            echo 'Falso <br/>';
        }

        // Operador negação - !(f) = v
        if(!('a' == 'b')) {
            echo 'Verdadeiro <br/>';
        } else {
            echo 'Falso <br/>';
        }

        // -----------------------------

        // v e v e f = f
        if(22 == 22 && 3 == 3 && 5 != 5) {
            echo 'Verdadeiro <br/>';
        } else {
            echo 'Falso <br/>';
        }

        // "()" Os parenteses serve para estabelecer precedência
        // (v e v) = v ou f = v
        if((22 == 22 && 3 == 3) || 5 != 5) {
            echo 'Verdadeiro <br/>';
        } else {
            echo 'Falso <br/>';
        }

    ?>
</body>
</html>