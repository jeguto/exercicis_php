<?php

const IVA = 0.21;

$producte = 'teclat';
$base = 79.90;
$estoc = 4 ; 

$total = round($base * (1+IVA),2);
$nom = 'jesus';
$apellido = 'guillen';
$dadespersonal = 'calle martinet';
?>

<h2><?php echo $producte ?></h2>
<p> preu amb iva : <?=$total; ?>

<h2>nombre</h2>
<p><?= $nom ?></p>
<h2>apellido</h2>
<p><?= $apellido ?></p>
<h2>calle</h2>
<p><?= $dadespersonal ?></p>