<?php
// I
// M
// P
// O
// R
// T
// A
// N
// T
// E

// CORREGIR: NO SE PUEDE DIVIDIR POR CERO PQ TIRA ERROR
// CORREGIR: HACER QUE DEVUELVA RESULTADO CUANDO NO HAYA RAIZ DE NUMERO NEGAIVO

/* Calculo de baskara */

$datofinal = null;

if ($_POST['bhaskara']) {
$datoa = (int)$_POST['numA'];
$datob = (int)$_POST['numB'];
$datoc = (int)$_POST['numC'];


if (multiplicacion($datoa, $datob, $datoc) < 0) {
    $datofinal = "Error; no hay raiz de numero negativo";
    
}

$datoRaiz = sqrt(division(multiplicacion($datoa, $datob, $datoc), diviMultiplicacion($datoa)));

$datofinal = 4 + $datoRaiz;

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