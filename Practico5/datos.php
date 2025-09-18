<?php

include ('../Lab4/funciones_cedula.php');
$multipliEach = [2, 9, 8, 7, 6, 3, 4];

// Funciones
function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}

function obtenerSituacion($promedio) {
    if ($promedio >= 8) {
        return "Exonerado";
    } elseif ($promedio >= 4) {
        return "Examen Reglamentado";
    } else {
        return "Examen Febrero";
    }
}



// Procesar los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $cedula = (int)$_POST["cedula"];
    $localidad = $_POST["localidad"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $notas = $_POST["notas"]; // array de notas

    $promedio = calcularPromedio($notas);
    $situacion = obtenerSituacion($promedio);
    $cedula = verifCI($cedula, $multipliEach);

    if ($cedula === "Tu cédula si existe"){


    echo "<h2>Ficha del Estudiante</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Cédula:</strong> $cedula</p>";
    echo "<p><strong>Localidad:</strong> $localidad</p>";
    echo "<p><strong>Dirección:</strong> $direccion</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Notas:</strong> " . implode(", ", $notas) . "</p>";
    echo "<p><strong>Promedio:</strong> " . number_format($promedio, 2) . "</p>";
    echo "<p><strong>Situación Académica:</strong> $situacion</p>";
    } else if ($cedula === "Tu cédula NO existe"){
        echo "<p style='color: red;'><strong>Error:</strong> La cédula ingresada no es válida.</p>";
}
}

?>