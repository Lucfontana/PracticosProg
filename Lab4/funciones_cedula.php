<?php

$verificadorCI = null;
$digVerificador = null;
$multipliEach = [2,9,8,7,6,3,4];
//Función que es llamada cuando se aprieta 'verificarCI', esta función
//llama a la de mostrarDigVerificador para compararla con el octavo número de la CI
function verifCI($CI, $multiEach)
{
    $digitoVerif = 0;
    $arrayCI = str_split($CI); //Se divide la CI en numeros independientes (string) y se guarda en un arreglo

    if ($arrayCI[0] === "0"){
        return "Su CI no puede comenzar con un 0";
    } else if (strlen($CI) != 8) { //contar la cantidad de caracteres de un string
        return 'La CI ingresada debe ser de 8 carácteres'; 
    } else {
        $digitoVerif = mostrarDigVerificador($CI, $multiEach);
        if ($digitoVerif == $arrayCI[7]) { //Se compara el digito verificador con el último numero de la ci
            return 'Tu cédula si existe';
        } else {
            return 'Tu cédula NO existe';
        }
    }

}

//Verifica que se ingresen solo 7 caracteres en el input y llama a la función de mostrarDigVerificador
function crearDigitoVerif($CI, $multiEach)
{
    //Se verifica que el usuario no haya ingresado un numero que empiece con cero
    $arrayCI = str_split($CI);
    if ($arrayCI[0] === "0"){
        return "Su CI no puede comenzar con un 0";
    }
    else if (strlen($CI) != 7) {
        return 'Por favor, ingrese una CI de 7 carácteres';
    } else {
        return 'Tu digito verificador es: ' . mostrarDigVerificador($CI, $multiEach);
    }
}

//Algoritmo para saber el digito verificador, recibe la CI y los números para multiplicar
function mostrarDigVerificador($CI, $multiEach)
{
    //Se declaran variables locales que se van a estar usando
    $restador = 0;
    $resultadoFinal = 0;
    $digitoVerif = 0;
    $arrayCI = str_split($CI);

    //Se hacen los cálculos
    for ($i = 0; $i < 7; $i++) {
        $resultActual = $arrayCI[$i] * $multiEach[$i];
        $resultadoFinal = $resultadoFinal + $resultActual;
    }

    //Se busca el siguiente múltiplo de 10 más grande que resultadoFinal
    while ($restador < $resultadoFinal) {
        $restador = 10 * $i;
        $i++;
    }

    //Se hace una resta para encontrar el digito verificador y se muestra
    $digitoVerif = $restador - $resultadoFinal;
    return $digitoVerif;

}

?>