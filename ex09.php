<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php

$Alumnes = [
    ['nom' => 'a', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'b', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'c', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'd', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'e', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'f', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'g', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'h', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'i', 'curso' => 79.9, 'edat' => 79.9, 'nota_media' => 79.9],
    ['nom' => 'j', 'curso' => 24.5, 'edat' => 79.9, 'nota_media' => 79.9]
];

?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Edad</th>
        <th>Nota media</th>
    </tr>

    <?php foreach ($Alumnes as $alumne): ?>
        <tr>
            <td><?= $alumne['nom'] ?></td>
            <td><?= $alumne['curso'] ?></td>
            <td><?= $alumne['edat'] ?></td>
            <td><?= $alumne['nota_media'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>




</body>
</html>
