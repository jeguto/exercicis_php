<?php

// Constantes del juego
const NOM_JOC = "Món Màgic";
const VIDA_MAXIMA = 100;
const EXP_NIVELL = 1000;
const FORCA_MAXIMA = 100;
const LLINDAR_FERIT = 30;


// Datos del personaje
$nom = "Arthas";
$classe = "Guerrer";
$nivell = 5;
$vidaActual = 5;
$forcaActual = 80;
$experiencia = 700;
$atacBase = 20;


// Cálculos
$percentatgeVida = ($vidaActual / VIDA_MAXIMA) * 100;
$percentatgeForca = ($forcaActual / FORCA_MAXIMA) * 100;

$experienciaFalta = EXP_NIVELL - $experiencia;

$poderAtac = $atacBase + ($nivell * 5);


$percentatgeVida = round($percentatgeVida, 1);
$percentatgeForca = round($percentatgeForca, 1);

$estat = "Ferit";
$estatNormal = "Normal";

?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Fitxa de personatge</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
        }

        .barra {
            background: #E1E8E8;
            border-radius: 99px;
            height: 14px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .barra span {
            display: block;
            height: 100%;
            border-radius: 99px;
        }

        .barra .vida {
            background: #C2661F;
        }

        .barra .forca {
            background: #02736F;
        }

    </style>
</head>

<body>

    <h1><?= NOM_JOC ?></h1>

    <?php

    // Echo con comillas dobles y una variable dentro
    echo "<h2>Personatge: $nom</h2>";

    // Echo con comillas simples y concatenación
    echo '<p>Classe: ' . $classe . '</p>';

    ?>

    <p>Nivell: <?= $nivell ?></p>

    <p>Vida: <?= $vidaActual ?> / <?= VIDA_MAXIMA ?></p>

    <!-- La anchura de la barra se calcula con PHP -->
    <div class="barra">
        <span class="vida" style="width: <?= $percentatgeVida ?>%"></span>
    </div>

    <p>Força: <?= $forcaActual ?> / <?= FORCA_MAXIMA ?></p>

    <!-- Barra de fuerza -->
    <div class="barra">
        <span class="forca" style="width: <?= $percentatgeForca ?>%"></span>
    </div>

    <p>Percentatge de vida: <?= $percentatgeVida ?>%</p>

    <p>Percentatge de força: <?= $percentatgeForca ?>%</p>

    <p>Experiència actual: <?= $experiencia ?></p>

    <p>Experiència que falta: <?= $experienciaFalta ?></p>

    <p>Poder d'atac: <?= $poderAtac ?></p>

    <p>Estat: <?= $estatNormal ?></p>

</body>

</html>

