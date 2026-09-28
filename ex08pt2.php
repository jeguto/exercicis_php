
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
    <?php for ($i =1; $i <=10; $i++):
    <tr>
    <td><?= $i?> x7</td>
    <td><?= $i?> *7</td>
    </tr>
    <?php endfor;?>

</body>
</html>



$colors = ['vermell', 'verd', 'blau'];

print_r($colors);


$producte = [
        'nom' => 'teclat mecanic',
        'preu' => 79.90,
        'estoc'=> 4,
];

echo $producte['nom'];


foreach($colors as &color){
        echo "<li>$color</li>";

}



$productes = {
['nom' => 'teclat', 'preu' => 79.9];
['nom' => 'Ratoli', 'preu' => 24.5];
['nom' => 'Monitor', 'preu' => 189];
};



<?php foreach ($productes as $p): ?>
    <tr>
     <td><?= $p ['nom'] ?</td>
    <td><?= </td>
;


/*count ($a) quants elements te
in_array($x, $a, true); si un valor hi es el true comparacion
array_key_exists('k', $a); si una calu existeix
sort/ rsort/ ksort ordena per vallr o per clau
<arry_sum><max><min>suma maxim
array_colum($a,'peru
imlou expou)


