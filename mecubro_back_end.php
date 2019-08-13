<!-- Crear una función que dado un array Array[] de n números y un número x, encuentre dentro de
Array[] un par de elementos cuya suma sea igual a x.
Dicha función deberá devolver un par de elementos que cumplan la condición o “false” en caso
de no encontrarlos. -->
<?php


$array = [3,1,9,5,22,12,-12,22,9,4,6,7,5,3,2,1,5,6,7,8,33,44,6,7,77,88,-23,31];

function sumaDeNumeros($array, $x) {
$acumulador = 0;

// CONDICION SUMANDO DOS POSICIONES FIJAS DEL ARRAY, SI NO SE CUMPLE, SE MEZCLA Y CONTINUA
  while ($array[0] + $array[1] != $x && $acumulador < (count($array) * 100)) {
    $acumulador = $acumulador + 1;
    shuffle($array);
 }

// SI SE ENCUENTRA LA SUMA DE DOS NROS, SE IMPRIME EN PANTALLA Y CON LA CANTIDAD DE INTENTOS
   if  ($array[0] + $array[1] == $x) {
     echo "<b>$array[0] + $array[1] es $x </b>";
     echo "<br>";
     echo "<b> En $acumulador intentos </b>";
     echo "<br>";
 }

// SI NO SE ENCUENTRA LA SUMA DE DOS NROS, SE ACABA LA SECUENCIA Y DEVUELVE FALSO.
  elseif (count($array) * 1000 >= $acumulador) {
    echo "<b>No existen dos numeros cuya suma sea $x </b>";
    return false;
}
}

sumaDeNumeros($array, 34);







 ?>
