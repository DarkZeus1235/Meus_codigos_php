<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/PHP-logo.svg">
    <title>Atividade 2</title>
</head>
<body>
    <?php
    $nomes = ["Joao, Matheus, Maria, Juliana, Lucas"];
    $carros = ["Celta, peugeot, Porsche, Golf"];
    $paises = ["Brasil, USA, Canada"];
    $capitais = ["Brasília, Washington, Vancouver"];

    echo("Os nomes dos meus filhos seriam:") . $nomes[0];
    echo("</br>");
    echo("Meus carros favoritos são:") . $carros[0];
    echo("</br>");
    echo("Meus países favoritos são:") . $paises[0];
    echo("</br>");
    echo("As capitais dos meus países favoritos são:") . $capitais[0];
    ?>
</body>
</html>