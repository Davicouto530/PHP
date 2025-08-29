<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para string</title>
</head>
<body>
    <h1>Funções nativas para string</h1>

    <?php

        // Variável que será testada
        $texto = 'Curso completo de PHP';

        // strtolower() -> Transforma todos os caracteres da string em minúsculas
        echo "$texto <br/>";
        echo strtolower($texto); // Pode escrever dentro ao invés de ser uma variável

        echo '<hr/>';

        // strtoupper() -> Transforma todos os caracteres da string em maiúsculas
        echo "$texto <br/>";
        echo strtoupper($texto);

        echo '<hr/>';

        // ucfirst() -> Transforma o primeiro caracter da string em maiúsculo
        echo "$texto <br/>";
        echo ucfirst($texto);

        echo '<hr/>';

        // strlen() -> Conta a quantidade de caracteres de uma string
        echo "$texto <br/>";
        echo strlen($texto); // Exibe a quantidade de caracteres no texto

        echo '<hr/>';

        // str_replace(<procura por>, <substitui por>, $texto) -> Substitui uma cadeia de caracteres por outra dentro de uma string
        echo "$texto <br/>";
        echo str_replace('.', ',', '22.20'); // Substituindo o ponto pela virgula
        echo str_replace('PHP', 'Javascript', $texto); 
        // Primeiro passa a palavra/frase que será substituida, depois vem a nova palavra/frase e o terceiro é aonde que vai ser

        echo '<hr/>';

        // substr($texto, <posicao inicial>, <qtde caracteres>) -> Retorna parte de uma string
        echo "$texto <br/>";
        echo substr($texto, 1, 4); 
        // A partir da posição 1, vai recuperar 4 caracteres
        // 0,1,2,3,4... -> Começa pelo "0"
    ?>
</body>
</html>