<?php

$resultado = null;

if(isset($_POST['calculoBasico'])){
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $operador = (string)$_POST['operador'];

    $resultado = calculo($num1, $num2, $operador);
}

function calculo($num1, $num2, $operador){
    switch($operador){
        case '+': 
            return "Resultado de la operacion: ".$num1 + $num2;
        case '-':
            return "Resultado de la operacion: ".$num1 - $num2;
        case 'x':
            return "Resultado de la operacion: ".$num1 * $num2;
        case '/':
            if ($num2 != 0 && $num1 != 0){
                return "Resultado de la operacion: ".$num1 / $num2;
            } else {
                return 'Error: No se puede dividir por cero';
            }
        default:
            return 'Opción inválida, vuelva a intentarlo ingresando algo distinto.';
    }
}
require("ingreso_formulario.php");
?>