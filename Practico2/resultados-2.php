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
        for($i = 1; $i <= 10; $i++) {
            $resultado[$i] = $numerodeTabla . " x " . $i . " = " . tablas($numerodeTabla, $i);
        }
    }
}

else if (isset($_POST['adivina5oro'])) {
    $oro = (int) $_POST['5oro'];
    if ($oro > Porcentaje()) {
        $OroPorcentaje = "Error; Demasiadas veces jugadas";
    } else if ($oro < 1) {
        $OroPorcentaje = "Error; no puedes ingresar numeros negativos";
    } else {
        $OroPorcentaje = "Tus posibilidades son de ".Posibilidades($oro)." entre ".Porcentaje()."<br>";
        $OroPorcentajePorcentaje = "Lo que es igual a: ".PorcentajePorcentaje($oro)."%";
    }
} 
else if (isset($_POST['factorial'])) {
    $numeroFactorial = (int) $_POST['numeroFactorial'];
    if ($numeroFactorial < 0) {
        $factorial = "Error; El número ingresado debe ser positivo";
    } else if ($numeroFactorial > 50) {   
        $factorial = "Error; El número no puede superar el 50";
    } else if ($numeroFactorial == 0) {
        $factorial = 1;
    }
    else {
        $factorial = "Resultado: ".CalculoFactorial($numeroFactorial, 1);
    }
}

function tablas($numero, $multiplicador) {
    return $numero * $multiplicador;
}

// Funciones de 5 de oro
function Posibilidades($oro) {
    $oportunidades = 5;
    $limite_oportunidades = 1;

    $factorial2 = 48;
    $limite2 = 44;

    $resultado = ((CalculoFactorial($oportunidades, $limite) / 120)*$oro);

    $resultado2 = ((CalculoFactorial($factorial2, $limite2)) / 120);
}

function PorcentajePorcentaje($oro) {
    return (Posibilidades($oro)/Porcentaje())*100;
}

// Funciones de Factorial
function CalculoFactorial($Numero, $limite) {
    $i = 1;
    $factor = $Numero;

    for ($i=$limite;$i<$Numero;$i++) {
        $factor = $factor*($Numero-$i);
    }

    return $factor;
}

require('Ingresodatos.php');




?>