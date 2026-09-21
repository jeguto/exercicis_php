<?php
$nom = "pepito";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tres formas y el mismo resultado</h1>

    <?php echo "<p>Hola,$nom</p>";?>

    <p>Hola<?= $nom ?> </p>

    <p>hola pepito </p>
    
</body>
</html>