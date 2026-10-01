<?php

//funciones de cadena de texto


$cadena = "Hola";

$cadena{0} = "C";

echo "ahora cadena es: " . $cadena; 

//funciones prestablecidas

//strlen --> medir la longitid de la cadena

$cadena =" aquesta caena te les lletres";
$num_caractere = strlen($cadena);

echo "el total dee cacarters es :" .$num_caracters."<br>";

//strpos --> retorma la sesella on troba la subcadena 
$email = "hola@jviladoms.cat;"
echo "posico " .strpos($email ,"@")."<br>";

//strcmp --> string compare, compara dos cadena 
// si retorna 0 es igual
//strcmp ($cad1, $cad2);
//si retorna <0 la primera cadena mas pequeña
//si retorna >0 la primera 

$cad1 = "njfvijenviejnviejnv"

$cad2 = "aaaaaaaa"

echo "utilizamos strcmp: " .strcmp($cad1,$cad2)." "<br>";

$cadena ="php es un llenguatge facil;

echo"el el subrt de 0 a 3 :"


// trim: elim9nr espacilns vacios

echo "ejemplo de ltrim";

//str_replce


//strolower($cadena)

//strupper 

<?php

$str = "Salut l'ami, vous
        avez          une b3lle mine !";

print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, '3'));

echo str_word_count($str);

?>


str_word_count() cuenta el número de palabras en el string string. 
.
?>


