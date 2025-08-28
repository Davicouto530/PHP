<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipo</title>
</head>
<body>
    <h1>Casting de tipo</h1>

    <?php 
        // Convertendo variáveis

        // gettype(variável) => retorna o tipo da variável

        // Variável que será convertida, pode ser qualquer tipo
        $valor = true;

        // Convertendo a variável "$valor", e colocando dentro da variável "$valor2". No lugar de "float" também pode ser usado o "double", no "int" pode ser usado o "integer" e no "boolean" pode ser usado o "bool", que da no mesmo os dois de cada um.
        // Pode converter para "string", "float", "int" e "bool"

        // Convertendo um inteiro para float
        // $valor2 = (float) $valor; 

        // Convertendo um número para string
        // $valor2 = (string) $valor; 

        // Convertendo um float para inteiro
        // $valor2 = (int) $valor; 

        // Convertendo uma string para inteiro e float
        // $valor2 = (int) $valor; 

        // Convertendo uma string para boolean, retorna "1" ou " "
        // $valor2 = (bool) $valor; 

        // Convertendo um boolean para inteiro, retorna "1" ou "0"
        // $valor2 = (int) $valor; 

        // Convertendo um boolean para string, retorna "1" ou " "
        $valor2 = (string) $valor; 

        // Convertendo a variável boolean para string mas vem como "1", e convertendo esse "1" para inteiro
        $valor3 = (int) $valor2;

        echo $valor . ' ' . gettype($valor); // boolean
        echo '<br/>';
        echo $valor2 . ' ' . gettype($valor2); // string
        echo '<br/>';
        echo $valor3 . ' ' . gettype($valor3); // int
    ?>
</body>
</html>