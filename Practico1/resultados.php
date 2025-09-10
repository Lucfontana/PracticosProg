<?php

/* Calculo de baskara */

// Se establecen como null para en caso de devolver un error solo se muestre el mensaje de error.
$mensajeA = null;
$mensajeB = null;

if ($_POST['bhaskara']) {
$datoa = (int)$_POST['numA'];
$datob = (int)$_POST['numB'];
$datoc = (int)$_POST['numC'];

    if ($datoa == 0) {
        $mensajeA = "Error; no es una ecuación cuadratica ya que a = 0";
    } else if (multiplicacion($datoa, $datob, $datoc) < 0) {
        $mensajeA = "Error; No hay raiz de numero negativo";
    } else {
        $datoRaiz = sqrt(multiplicacion($datoa, $datob, $datoc));
        $datofinalA = division(diviSuma($datob, $datoRaiz), diviMultiplicacion($datoa));
        $datofinalB = division(diviResta($datob, $datoRaiz), diviMultiplicacion($datoa));
        $mensajeA = "Resultado primera x: ".$datofinalA;
        $mensajeB = "Resultado segunda x: ".$datofinalB;
    }
}

function multiplicacion($datoa, $datob, $datoc) {
    return (($datob*$datob)-(4*$datoa*$datoc));
}

function diviMultiplicacion($datoa) {
    return ($datoa * 2);
}

function diviSuma($datob, $datoRaiz) {
  return ((-$datob) + $datoRaiz);
}

function diviResta($datob, $datoRaiz) {
  return ((-$datob) - $datoRaiz);
}

function division($dato1, $dato2) {
    return $dato1 / $dato2;
}



require("ingreso_formulario.php")


?>