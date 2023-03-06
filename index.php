<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/PHP-logo.svg">
    <title>Atividade 1</title>
</head>
<body>
<?php
    $nome = "João Pedro";
    $idade = "15";
    $endereço = "Rua Rio Grande do Sul";
    $cidade = "Ivaiporã";
    $CEP = "86870-000";
    $primeiro = "8";
    $segundo = "9";
    $terceiro = "10";
    $media = ($primeiro+$segundo+$terceiro)/3;

    echo("Seu nome é:" . $nome);
    echo("</br>");
    echo("Sua idade é:" . $idade);
    echo("</br>");
    echo("Seu endereço é:" . $endereço);
    echo("</br>");
    echo("Sua cidade é:" . $cidade);
    echo("</br>");
    echo("Seu CEP é:" . $CEP);
    echo("</br>");
    echo("Sua primeira nota é:" . $primeiro);
    echo("</br>");
    echo("Sua segunda nota é:" . $segundo);
    echo("</br>");
    echo("Sua terceira nota é:" . $terceiro);
    echo("</br>");
    echo("Sua média é:" . $media);
?>
</body>
</html>