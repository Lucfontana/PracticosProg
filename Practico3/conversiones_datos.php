<?php

$conversion = null;

// Parte 2
$resultado = null;
$resultado2 = null;
$resultado3 = null;
$resultado4 = null;

//Si el formulario 'convertir' se envia, se ejecuta lo de adentro
if (isset(($_POST['convertir']))) {

    //Trae los valores desde el formulario cuando se envia
    $numeroAConvertir = $_POST['num'];
    $baseOrigen = (int)$_POST['desde'];
    $baseDestino = (int)$_POST['destino'];


    //Si el correctInput devuelve true (lo que significaria que el input tiene informacion adecuada) se realiza la conversion
    if ($baseOrigen == null || $baseDestino == null) {
        $conversion = "Ingresa una base de destino y una de origen";
    } else {
        if (correctInput($baseOrigen, $numeroAConvertir)) {
            $conversion = base_convert($numeroAConvertir, $baseOrigen, $baseDestino);
        } else {
            //En el otro caso, se muestra que se eligio la base incorrecta
            $conversion = "No se puede convertir tu numero, base de origen elegida incorrecta";
        }
    }
    //Se carga todo en el index
    require("index.php");
}

if (isset(($_POST['Calcular']))) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $base1 = (int)$_POST['base1'];
    $base2 = (int)$_POST['base2'];
    $operacion = $_POST['operacion'];
    $base_convertir = 10;

    if ($base1 == null || $base2 == null) {
        $resultado = "Ingresa una base para el primer numero y una base para el segundo";
    } else if ($num1->is_float() || $num2->is_float()) {
        $resultado = "No puedes ingresar numeros con coma";
    } else if ($operacion == null) {
        $resultado = "Ingresa una operacion";
    } else {
        $num1_convertido = base_convert($num1, $base1, $base_convertir);
        $num2_convertido = base_convert($num2, $base2, $base_convertir);

        if (Calculadora($num1_convertido, $num2_convertido, $operacion)->is_int()) {
            $num_convertir = Calculadora($num1_convertido, $num2_convertido, $operacion);
            $resultado = $num_convertir;
            $resultado2 = base_convert($num_convertir, 10, 2);
            $resultado3 = base_convert($num_convertir, 10, 8);
            $resultado4 = base_convert($num_convertir, 10, 16);
        } else {
            $resultado = "El resultado de la opercion es un numero con coma y no se puede cambiar de base";
        }
    }
}


//https://www.w3schools.com/php/php_regex.asp
//Verifica si los inputs tienen informacion correspondiente a la base seleccionada 
function Calculadora($num1_convertido, $num2_convertido, $operacion)
{
    switch ($operacion) {
        case '+':
            return $num1_convertido + $num2_convertido;
        case '-':
            return $num1_convertido - $num2_convertido;
        case 'x':
            return $num1_convertido * $num2_convertido;
        case '/':
            if ($num2_convertido != 0 && $num1_convertido != 0) {
                return $num1_convertido / $num2_convertido;
            } else {
                return 'Error: No se puede dividir por cero';
            }
        default:
            return 'Opción inválida, vuelva a intentarlo ingresando algo distinto.';
    }
}

function correctInput($baseOrigen, $numeroAConvertir)
{
    //(^) busca baseOrigen el INICIO del string
    //($) indica que busque hasta el FINAL del string
    //(+) tiene que haber al menos una coincidencia (tambien verifica que el input no este vacio)

    $patronBinario = "/^[01]+$/"; //Verifica si tiene solamente 0 o 1
    $patronOctal = "/^[0-7]+$/"; // Verifica que no se utilice ni el 8 ni el 9
    $patronDecimal = "/^[0-9]+$/"; //Verifica si tiene solamente numeros en general 
    $patronHexa = "/^[0-9a-f]+$/i"; //busca que tenga numeros al 0-9 y letras de la a-f
    if ($baseOrigen == 2) return preg_match($patronBinario, $numeroAConvertir);
    if ($baseOrigen == 8) return preg_match($patronOctal, $numeroAConvertir);
    if ($baseOrigen == 10) return preg_match($patronDecimal, $numeroAConvertir);
    if ($baseOrigen == 16) return preg_match($patronHexa, $numeroAConvertir);
}
