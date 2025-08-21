<?php


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
    return pi() * ($radio * 2);
}


//Verifica cuales son los formularios que están siendo enviados
if (isset($_POST['enviarCuadrado'])){
    $cuadrado = (int)$_POST['num1'];
    // if ($cuadrado == 0 && $cuadrado )

    echo '<div class = "resultado">' . 'El area de tu cuadrado es de: ' . areaCuadrado($cuadrado) . " metros cuadrados" . '</div>';

} else if (isset($_POST['enviarRectangulo'])){
    $baseRect = (int)$_POST['num1'];
    $alturaRect = (int)$_POST['num2'];

    echo '<div class = "resultado">' . 'El area de tu rectangulo es de: ' . areaRectangulo($baseRect, $alturaRect) . ' metros cuadrados' . '</div>';
} else if (isset($_POST['enviarTriangulo'])){
    $baseTri = (int)$_POST['num1'];
    $altTri =  (int)$_POST['num2'];

    echo '<div class = "resultado">' . 'El área de tu triángulo es de: ' . areaTriangulo($baseTri, $altTri) . ' metros cuadrados' . '</div>';
} else if (isset($_POST['enviarCircunferencia'])){
    $radio = (int)$_POST['num1'];

    echo '<div class = "resultado">' . 'El área de tu circunferencia es de: ' . areaCircunferencia($radio) . ' metros cuadrados' . '</div>';
}


require("ingreso_formulario.php");




?>