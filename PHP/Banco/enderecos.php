<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('uma cidade', 'bairro', 'rua', 'numero');
$outroEndereco = new Endereco('outra cidade', 'outro bairro', 'outra rua', 'outro numero');


$umEndereco->cidade = "rio preto" . PHP_EOL;

echo $umEndereco;




/*$umEndereco = new Endereco('Petrópolis','Bairro Qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua', '50');

echo $umEndereco->cidade;

exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;*/


