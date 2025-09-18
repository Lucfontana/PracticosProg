<?php

$areaCuad = null;
$areaR = null;
$areaT = null;
$areaCir = null;

// funciones para realizar los calculos matematicos
function areaCuadrado($cuadrado){
    return $cuadrado * $cuadrado;
}

function areaRectangulo($base, $altura){
    return $base * $altura;
}

function areaTriangulo($base, $altura){
    return areaRectangulo($base, $altura) / 2;
}

function areaCircunferencia($radio){
    return pi() * ($radio * $radio);
}


//Verifica cuales son los formularios que están siendo enviados
if (isset($_POST['enviarCuadrado'])){
    $cuadrado = (int)$_POST['num1'];
    $areaCuad = areaCuadrado($cuadrado);

} else if (isset($_POST['enviarRectangulo'])){
    $baseRect = (int)$_POST['num1'];
    $alturaRect = (int)$_POST['num2'];
    $areaR = areaRectangulo($baseRect, $alturaRect);

} else if (isset($_POST['enviarTriangulo'])){
    $baseTri = (int)$_POST['num1'];
    $altTri =  (int)$_POST['num2'];

    $areaT= areaTriangulo($baseTri, $altTri);
} else if (isset($_POST['enviarCircunferencia'])){
    $radio = (int)$_POST['num1'];

    $areaCir = areaCircunferencia($radio);
}


require("ingreso_formulario.php");




?>