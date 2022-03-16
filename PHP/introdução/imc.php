<?php

$peso = 85.00;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";
if ($imc < 18.5) {
    echo "ABAIXO";
}
  elseif($imc < 25) {
    echo "DENTRO";
}
  else {
    echo "ACIMA";
}

echo " do recomendado" . PHP_EOL;
   




