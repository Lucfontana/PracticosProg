<?php

$conversion = null;

//Si el formulario 'convertir' se envia, se ejecuta lo de adentro
if (isset(($_POST['convertir']))) {

//Trae los valores desde el formulario cuando se envia
$numeroAConvertir = $_POST['num'];
$baseOrigen = (int)$_POST['desde'];
$baseDestino = (int)$_POST['destino'];

//Si el correctInput devuelve true (lo que significaria que el input tiene informacion adecuada) se realiza la conversion
if (correctInput($baseOrigen, $numeroAConvertir)){
    $conversion = base_convert($numeroAConvertir, $baseOrigen, $baseDestino);
} else {
    //En el otro caso, se muestra que se eligio la base incorrecta
    $conversion = "No se puede convertir tu numero, base de origen elegida incorrecta";
}

//Se carga todo en el index
require("index.php");
}

//https://www.w3schools.com/php/php_regex.asp
//Verifica si los inputs tienen informacion correspondiente a la base seleccionada 

function correctInput($baseOrigen, $numeroAConvertir){
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

?>