<?php 

include('funciones_cedula.php');
//Las variables en null son para que no se muestren, ya que
//una vez su valor sea asignado, van a ser visibles en "ingreso_datos.php"
$verificadorCI = null;
$digVerificador = null;
$multipliEach = [2, 9, 8, 7, 6, 3, 4]; //Números por los quese multiplica la CI ingresada (el temita de la formula)

//Verifica cuál de los dos formularios se está enviando
if (isset($_POST['verificarCI'])) {
    $verificadorCI = (int) $_POST['ci'];

    $verificadorCI = verifCI($verificadorCI, $multipliEach);
} else if (isset($_POST['generarDV'])) {
    $ciIngresada = (int) $_POST['ci7'];
    $digVerificador = crearDigitoVerif($ciIngresada, $multipliEach);
}

require('ingreso_datos.php');
?>