<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para datas</title>
</head>

<body>
    <h1>Funções nativas para datas</h1>

    <?php

    // date(formato) -> Recupração da data atual / data corrente
    echo date('d/m/Y H:i');
    // Dentro dos parenteses tem que passar os parâmetros.
    // O parâmetro "d" serve para retornar o dia da data atual.
    // O parâmetro "D" serve para retornar o dia da semana.
    // O parâmetro "m" serve para retornar o mês.
    // O parâmetro "y" serve para retornar o ano atual só com dois digitos.
    // O parâmetro "Y" serve para retornar o ano atual com quatro digitos.
    // O parâmetro "H" serve para retornar a hora atual.
    // O parâmetro "i" serve para retornar os minutos.

    echo '<br/>';

    // date_default_timezone_get(timezone) -> Recuprar o timezone default da aplicação
    echo date_default_timezone_get();
    // Aqui mostra da onde está pegando os dados de data e horário

    echo '<br/>';

    // date_default_timezone_set(timezone) -> Atuzalizar o timezone default da aplicação
    date_default_timezone_set('America/Sao_Paulo');
    // Definindo que quer pegar os dados de data e horário do Brasil
    echo date('d/m/Y H:i');

    echo '<hr/>';

    // strtotime(data) -> Transformar datas textuais em segundos
    // Datas
    $data_inicial = '2025-05-12';
    $data_final = '2025-06-22';

    // Converte para timestamp (segundos desde 01/01/1970)
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    // Diferença em segundos (valor absoluto)
    $diferenca_times = abs($time_final - $time_inicial);

    // Quantos segundos tem em um dia
    $segundos_existem_dia = 24 * 60 * 60;

    // Diferença em dias
    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

    // Exibe resultados
    echo "Data inicial: $data_inicial<br/>";
    echo "Data final: $data_final<br/>";
    echo "Diferença em segundos: $diferenca_times<br/>";
    echo "Diferença em dias: $diferenca_de_dias_entre_as_datas";
    ?>
</body>

</html>