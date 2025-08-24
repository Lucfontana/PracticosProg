<?php 
$resultado1 = null;
$resultado2 = null;
$resultado3 = null;
$resultado4 = null;
$resultado5 = null;
$resultado6 = null;
$resultado7 = null;
$resultado8 = null;
$resultado9 = null;
$resultado10 = null;
//
$porcentaje = null;
//
$factorial = null;


if (isset($_POST['numeroTabla'])) {
    $numerodeTabla = (int) $_POST['numero'];
    if ($numerodeTabla > 10 || $numerodeTabla < 1) {
        $resultado1 = "Error; Debes un número entre 1 y 10";
    } else {
        $resultado1 = $numerodeTabla."*1 = ".tablas($numerodeTabla)[0]."<br>";
        $resultado2 = $numerodeTabla."*2 = ".tablas($numerodeTabla)[1]."<br>";
        $resultado3 = $numerodeTabla."*3 = ".tablas($numerodeTabla)[2]."<br>";
        $resultado4 = $numerodeTabla."*4 = ".tablas($numerodeTabla)[3]."<br>";
        $resultado5 = $numerodeTabla."*5 = ".tablas($numerodeTabla)[4]."<br>";
        $resultado6 = $numerodeTabla."*6 = ".tablas($numerodeTabla)[5]."<br>";
        $resultado7 = $numerodeTabla."*7 = ".tablas($numerodeTabla)[6]."<br>";
        $resultado8 = $numerodeTabla."*8 = ".tablas($numerodeTabla)[7]."<br>";
        $resultado9 = $numerodeTabla."*9 = ".tablas($numerodeTabla)[8]."<br>";
        $resultado10 = $numerodeTabla."*10 = ".tablas($numerodeTabla)[9]."<br>";
    }

} else if (isset($_POST['adivina5oro'])) {
    $OroPorcentaje = "Tus posibilidades son de ".Posibilidades()." entre ".Porcentaje()."<br>";
    $OroAnual = "Lo que significa que al año tienes una posibilidad de ".Posibilidades()." entre ".Porcentaje()/52;
} else if (isset($_POST['factorial'])) {
    $numeroFactorial = (int) $_POST['numeroFactorial'];
    if ($numeroFactorial < 1) {
        $factorial = "Error; El número ingresado debe ser positivo";
    } else {   
        $factorial = "Resultado: ".CalculoFactorial($numeroFactorial);
    }
}

// Funciones de Tabla
function tablas($numerodeTabla) {
    return $tabla = [$numerodeTabla*1,$numerodeTabla*2,$numerodeTabla*3,$numerodeTabla*4,$numerodeTabla*5,$numerodeTabla*6,$numerodeTabla*7,$numerodeTabla*8,$numerodeTabla*9,$numerodeTabla*10];
}


// Funciones de 5 de oro
function Posibilidades() {
    return (5*4*3*2*1)/120;
}

function Porcentaje() {
    return (48*47*46*45*44)/120;
}

// Funciones de Factorial
function CalculoFactorial($Numero) {
    $i = 1;
    $factor = $Numero;

    while ($i<$Numero) {
        $factor = $factor*($Numero-$i);
        $i = $i + 1;
    }

    return $factor;
}

require('Ingresodatos.php');




?>