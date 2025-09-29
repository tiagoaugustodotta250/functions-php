<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Idade</title>
</head>
<body>
    
    <?php

        $data = $_GET["d"];

        function calcularIdade(string $dataNascimento):array{

            $nascimento = new DateTime($dataNascimento);

            $hoje = new DateTime('now');

            $diferenca = $hoje->diff($nascimento);

            return [

                'anos' => $diferenca->y,
                'meses' => $diferenca->m,
                'dias' => $diferenca->d
            ];
        }

        $resultado = calcularIdade($data);
        print_r($resultado);
    ?>
</body>
</html>