<?php

$numInicial = readline("Digite um número: ");
$numFinal = readline("Digite outro número: ");
if($numInicial >= 0 && $numFinal > $numInicial) {
    for ($num = $numInicial; $num <= $numFinal; $num++) {
        $sNum = (string)$num;
        if ($sNum === strrev($sNum)) {
            echo " ".$num;
        }
    }
}
else {
    echo "Verifique se os números são respectivamentes:
        .Maior ou igual a zero
        .Maior que o número anterior";
}