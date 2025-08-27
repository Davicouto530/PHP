<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>Switch</h1>

    <?php 

        $parametro = 'ab';

        // No PHP compara só o valor, não o tipo, então se a condição for um número em string, vai ser cpmparado com o case normalmente. Também pode ser string, número e boolean
        switch ($parametro) {
            case 1:
                echo 'Entrou no case 1';
                break;
            
            case 'abc':
                echo 'Entrou no case 2';
                break;

            case false:
                echo 'Entrou no case 3';
                break;
            
            default:
                echo 'Entrou no default';
                break;
        }
    ?>
</body>
</html>