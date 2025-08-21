<?php


/* Calculo de baskara */

if ($_POST['bhaskara']) {
$datoa = (int)$_POST['numA'];
$datob = (int)$_POST['numB'];
$datoc = (int)$_POST['numC'];


if (multiplicacion($datoa, $datob, $datoc) < 0) {
    echo "Error; no hay raiz de numero negativo";
    return;
}

$datoRaiz = sqrt(division(multiplicacion($datoa, $datob, $datoc), diviMultiplicacion($datoa)));
$datofinal = 4 + $datoRaiz;

echo "El resultado es: ".$datofinal;

}

function multiplicacion($datoa, $datob, $datoc) {
    return (($datob*$datob)-(4*$datoa*$datoc));
}

function diviMultiplicacion($datoa) {
    return ($datoa * 2);
}

function division($dato1, $dato2) {
    return $dato1 / $dato2;
}



require("ingreso_formulario.php")


?>