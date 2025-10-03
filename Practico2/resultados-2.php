<?php
// Se establecen como null para en caso de devolver un error solo se muestre el mensaje de error.
$resultado  = [];
$OroPorcentajePorcentaje = null;
$factorial = null;


if (isset($_POST['numeroTabla'])) {
    $numerodeTabla = (int) $_POST['numero'];

    if ($numerodeTabla > 10 || $numerodeTabla < 1) {
        $resultado = "Error: Debes ingresar un número entre 1 y 10";
    } else {
        for ($i = 1; $i <= 10; $i++) {
            $resultado[$i] = $numerodeTabla . " x " . $i . " = " . tablas($numerodeTabla, $i);
        }
    }
} else if (isset($_POST['adivina5oro'])) {
    $oro = (int) $_POST['5oro'];
    if ($oro > CalculoPosibilidades($factorial2 = 48, $limite2 = 44)) {
        $OroPorcentaje = "Error; Demasiadas veces jugadas";
    } else if ($oro < 1) {
        $OroPorcentaje = "Error; no puedes ingresar numeros negativos";
    } else {
        $OroPorcentaje = "Tienes una probabilidad de: " . Posibilidades($oro, $limite1 = 1, $oportunidades = 5) . "%";
    }
} else if (isset($_POST['factorial'])) {
    $numeroFactorial = (int) $_POST['numeroFactorial'];
    if ($numeroFactorial < 0) {
        $factorial = "Error; El número ingresado debe ser positivo";
    } else if ($numeroFactorial > 50) {
        $factorial = "Error; El número no puede superar el 50";
    } else if ($numeroFactorial == 0) {
        $factorial = 1;
    } else {
        $factorial = "Resultado: " . CalculoFactorial($numeroFactorial, 1);
    }
}

function tablas($numero, $multiplicador)
{
    return $numero * $multiplicador;
}

function CalculoPosibilidades() {
    $resultado2 = ((CalculoFactorial(48, 44)) / 120);

    return $resultado2;
}

// Funciones de 5 de oro
function Posibilidades($oro) {
    $resultado = ((CalculoFactorial(5, 1) / 120) * $oro);

    return ($resultado / CalculoPosibilidades($oro)) * 100;
}


// Funciones de Factorial
function CalculoFactorial($Numero, $limite)
{
    $factor = $Numero;

    for ($i = 1; $limite < $Numero; $i++, $limite++) {
        $factor = $factor * ($Numero - $i);
    }

    return $factor;
}

require('Ingresodatos.php');
