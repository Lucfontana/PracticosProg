<?php

$conversion = null;

if (isset(($_POST['convertir']))) {
//https://www.w3schools.com/php/php_regex.asp
//Hacer un regex para los hexadecimales (y pasarlos a string)
// Pasar a int cualquiera de los otros valores, 
$valor = $_POST['num'];
$desde = (int)$_POST['desde'];
$destino = (int)$_POST['destino'];

$conversion = base_convert($valor, $desde, $destino);

require("index.php");
}

function transformer($desde){
    if ($desde != 16 && $desde != ''){
        return $desde = (int)$desde;
    } else {
        return $desde;
    }

    if ($desde == 2){
        //hacer el redex para verificar que solo tenga 0 o 1
    }
    else if ($desde == 8){
        //hacer el redex para verificar que NO tenga 8 o 9
    } 
}

?>