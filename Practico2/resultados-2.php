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

} 


function tablas($numerodeTabla) {
    return $tabla = [$numerodeTabla*1,$numerodeTabla*2,$numerodeTabla*3,$numerodeTabla*4,$numerodeTabla*5,$numerodeTabla*6,$numerodeTabla*7,$numerodeTabla*8,$numerodeTabla*9,$numerodeTabla*10];
}

require('Ingresodatos.php');



?>