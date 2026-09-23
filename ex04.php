<?php

// falta el dolar nom='Aina';
$nom='Aina';
//$assignatura = 'Desenvolupament' falta el ;
$assignatura = 'Desenvolupament';


$nota1= 7;
$nota2= 9;
$mitjana= $nota1 + $nota2 /2;

echo '<h1>Butlleti de notes</h1>';
echo '<p>Alumne: $nom</p>';
echo '<p>Assignatura : '+$assignatura + '</p';
//echo '<p>Assignatura : '+$assignatura + '</p'; es concatena amb un .
echo "<p> Mitjana: $mitjana </p>" //aqui no va  '

echo '<p>generat el ' . date('d/m/y') . '</p>'



