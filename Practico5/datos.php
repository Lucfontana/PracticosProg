<?php

$calcularpromedio = null;

if (isset($_POST['calcularpromedio'])) {
    $notas = array();
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["num$i"])) {
            $notas[] = (float)$_POST["num$i"];
        }
    }
    if (count($notas) > 0) {
        $calcularpromedio = array_sum($notas) / count($notas);
    }
}