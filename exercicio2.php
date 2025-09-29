<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de dias</title>
</head>
<body>
    <?php

    $chegou = $_GET['evento'];

    function diasParaEvento(string $dataEvento): int{

        $evento = new DateTime($dataEvento);

        $hoje = new DateTime('now');

        $diferenca = $evento->diff($hoje);

        return $diferenca->days;

    }

    echo "Faltam " . diasParaEvento($chegou) . " dias para o evento!"; 

    ?>
</body>
</html>