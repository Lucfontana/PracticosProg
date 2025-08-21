<?php

function areaCuadrado($cuadrado){
    return $cuadrado * $cuadrado;
}

function areaRectangulo($base, $altura){
    return $base * $altura;
}



if (isset($_POST['enviarCuadrado'])){
    $cuadrado = (int)$_POST['num1'];
    if ($cuadrado == 0 && $cuadrado )

echo 'El resultado es: ' . areaCuadrado($cuadrado);

} else if (isset($_POST['enviarRectangulo'])){
    $baseRect = (int)$_POST['num1'];
    $alturaRect = (int)$_POST['num2'];

    echo 'El area de tu rectangulo es: ' . areaRectangulo($baseRect, $alturaRect) . ' metros cuadrados';


}

require("ingreso_formulario.php");




?>