<?php
echo "<h1>Trabajo practico N°2 - Estructuras de Decisión<h1>";
echo "<br>";
echo "<h3>Punto 1:<h3>";

$n = 5 ;
if ($n > 0){
    echo "El número ingresado es un
    número positivo";
}
echo "<br>";
echo "<br>";
echo "<h3>Punto 2:<h3>";
if($n > 1 && $n < 10){
    echo "El número ingresado es mayor a 1 y menor a 10";
}
echo "<br>";
echo "<br>";
echo "<h3>Punto 3:<h3>";
if($n >= 10 || $n < 2){
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
}
else{
    echo "El número ingresado no pudo ser validado";
}
echo "<br>";
echo "<br>";
echo "<h3>Punto 4:<h3>";//
$numero1 = 4;
$numero2 = 5 ;

if($numero1 > $numero2){ //Si numero1 es mayor a numero2, imprimir la suma y la resta
    echo $numero1 + $numero2;
    echo "<br>";
    echo $numero1 - $numero2;
    echo "<br>";
}
elseif($numero1 < $numero2){//Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el res
    echo $numero2 * $numero1;
    echo "<br>";
    echo $numero2 / $numero1;
    echo "<br>";
    echo $numero2 % $numero1;//arreglar!! 
    echo "<br>";
}

elseif ($numero1 == $numero2){ //si son iguales imprimir  
    echo "Los números ingresados son iguales";
    
}

?>