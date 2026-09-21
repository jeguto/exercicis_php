<?php

echo 'Hola';
echo 'Hola', '', 'mon';
echo '<p>text</p>';

print 'Hola';
var_dump($x);
print_r($dades);

$nom = 'aina';
$edat = 19;
$actiu = true;
$nom = 'bernat';
$total = $edat + 1;

echo $nom;

$x = 5;
$x = 'cinc';

$a = '10' + 5;
$b = '10' . 5;

var_dump($a, $b);

$nom = 'Aina';
echo "Hola $nom";

echo 'hola ' . $nom . ', tens ' . $punts . ' punts';

define('IVA', 0.21);

const botiga = 'ca la web';

function saluda() {

    echo $missatge;
    $intern = 'adeu';
}

saluda();

declare(strict_types=1);

ini_set('display_errors', '1');

error_reporting(E_ALL);

setlocale(LC_ALL, 'es_ES');

date_default_timezone_set('Europe/Madrid');