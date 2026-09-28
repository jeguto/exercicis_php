<?php

const IVA = 0.21;

// ERROR 1: Faltaba el $ delante de botiga.
// En PHP las variables siempre llevan $.
$botiga = 'Tienda Molona';


// ERROR 2: Faltaba el ; al final.
// Cada instrucción tiene que terminar con punto y coma.
$producte = 'Producto to flama';

$preu = 34.90;
$unitats = 2;

$subtotal = $preu * $unitats;


// ERROR 3: IVA es una constante, por eso no lleva $.
// Antes estaba escrito $IVA y PHP lo buscaba como una variable.
$importIva = $subtotal * IVA;

$total = $subtotal + $importIva;

?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Tiquet</title>
</head>

<body>

    <h1><?= $botiga ?></h1>

    <p>Producte: <?= $producte ?></p>

    <p>Unitats: <?= $unitats ?></p>

    <?php

    // ERROR 4: Para juntar texto y una variable se usa el punto (.)
    // y no el +, porque el + es para hacer operaciones.
    echo '<p>Preu unitari: ' . $preu . ' EUR</p>';


    // ERROR 5: Con comillas simples PHP no cambia $subtotal por su valor.
    // Por eso lo junto con el punto para que muestre el número.
    echo '<p>Subtotal: ' . $subtotal . ' EUR</p>';

    ?>

    <p>IVA: <?= $importIva ?> EUR</p>

    <p>Total: <?= $total ?> EUR</p>

</body>

</html>

