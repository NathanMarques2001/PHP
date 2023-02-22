<?php

$peso = 54;
$altura = 1.6;

$imc = $peso / ($altura ** 2);

switch (true) {
  case ($imc < 18.5):
    echo "Seu IMC é {$imc} e você está abaixo do peso.";
    break;
  case ($imc >= 18.5 && $imc < 25):
    echo "Seu IMC é {$imc} e você está com o peso normal.";
    break;
  case ($imc >= 25 && $imc < 30):
    echo "Seu IMC é {$imc} e você está com sobrepeso.";
    break;
  case ($imc >= 30 && $imc < 35):
    echo "Seu IMC é {$imc} e você está com obesidade grau 1.";
    break;
  case ($imc >= 35 && $imc < 40):
    echo "Seu IMC é {$imc} e você está com obesidade grau 2.";
    break;
  default:
    echo "Seu IMC é {$imc} e você está com obesidade grau 3.";
    break;
}
