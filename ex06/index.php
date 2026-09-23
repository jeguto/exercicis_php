```php
<?php

const IVA = 0.21;
const DESCUENTO_SOCIO = 0.10;

$precio = 99.99;
$descuento = $precio * DESCUENTO_SOCIO;
$precioConDescuento = $precio - $descuento;
$iva = $precioConDescuento * IVA;
$total = $precioConDescuento + $iva;

$nombreTienda = "Tienda Online";
$descripcionTienda = "Esto es una tienda online guay";

$producto = "Camiseta guay";
$descripcion = "Camiseta chupi chupi cupi";
$stock = 10;
$referencia = "CAM-1412383";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombreTienda; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1><?php echo $nombreTienda; ?></h1>
        <p><?php echo $descripcionTienda; ?></p>
    </header>

    <main>

        <h2><?php echo $producto; ?></h2>

        <p class="descripcion">
            <?php echo $descripcion; ?>
        </p>

        <p class="preu">
            Precio sin IVA: <?php echo $precio; ?> EUR
        </p>

        <p class="preu">
            Descuento socio (10%): <?php echo $descuento; ?> EUR
        </p>

        <p class="preu">
            Precio con descuento: <?php echo $precioConDescuento; ?> EUR
        </p>

        <p class="preu">
            IVA (21%): <?php echo $iva; ?> EUR
        </p>

        <p class="preu">
            Total: <?php echo $total; ?> EUR
        </p>

        <p class="estoc">
            Unidades disponibles: <?php echo $stock; ?>
        </p>

        <p class="ref">
            Referencia: <?php echo $referencia; ?>
        </p>

    </main>

    <footer>
        <p><?php echo $nombreTienda; ?></p>
    </footer>

</body>

</html>
```
