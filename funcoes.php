<?php

function somatorio($valor){
    $resultado = 0;
    while($valor > 0){
        $resultado = $resultado + $valor;
        $valor--;
    }
    return $resultado;
}

function safadao($dia, $mes, $ano){
    $safadeza = somatorio($mes) + ($ano/100) + (50-$dia);
    $anjo = 100 - $safadeza;
    $frase = "Você é " . $anjo . "% anjo e " . $safadeza . "% safadeza."; 
    return $frase;
}

$frase = safadao($_POST['dia'], $_POST['mes'], $_POST['ano']);

require 'funcoes.view.php';