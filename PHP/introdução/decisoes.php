<?php

$idade = 14;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais que 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;


if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
}
  else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "você tem $idade anos, está acompanhado(a), pode entrar.";
  }
  else{ 
    echo "Você só tem $idade anos, não pode entrar" . PHP_EOL;
  }

 