<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <?php 
        // string
        $nome = "Davi do couto";
        
        // int
        $idade = 18;

        // float
        $peso = 54.5;

        // boolean
        $fumante = true; // (true = 1) (flase = vazio)

        // ----- Alterando valores da variável -----

        $idade = '30'; // Pode atribuir um outro tipo na variável. "idade" inicialmente é tipo "int", e agora estou atribuindo um tipo "string" na variável "idade"  
    ?>

    <h1>Ficha cadastral</h1>
    <br>

    <!-- Colocando os valores que estão nas variáveis do php dentro da tag "p" -->
    <p>Nome: <?= $nome ?></p> 
    <p>Idade: <?= $idade ?></p> 
    <p>Peso: <?= $peso ?></p> 
    <p>Fumante: <?= $fumante ?></p> 

</body>
</html>