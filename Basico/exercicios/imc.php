<?php




$peso = 115;
$altura = 1.85;

$imc = $peso / $altura ** 2;


if ($imc < 18.5) {
    echo "Seu imc é $imc e você está abaixo do peso";
}else if ($imc >= 18.5 && $imc <= 24.9 ) {
    echo "Seu imc é $imc e você está com peso normal";
}else if ($imc >= 25 && $imc <= 29.9 ) {
    echo "Seu imc é $imc e você está com Sobrepeso";
}else if ($imc >= 30 && $imc <= 34.9 ) {
    echo "Seu imc é $imc e você está com Obesidade grau 1";
}else if ($imc >= 35 && $imc <= 39.9 ) {
    echo "Seu imc é $imc e você está com Obesidade grau 2";
}else if($imc >= 40) {
    echo "Seu imc é $imc e você está com Obesidade grau 3";
}

