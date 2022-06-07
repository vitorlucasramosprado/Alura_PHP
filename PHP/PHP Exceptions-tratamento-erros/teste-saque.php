<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('111.111.111-11'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);

 try{
    $conta->saca(100);
} catch(SaldoInsuficienteException $exception){
    echo "Você não tem saldo suficiente para realizar este saque" . PHP_EOL;
    echo $exception->getMessage();
} 
echo $conta->recuperaSaldo() .PHP_EOL;
//echo $conta->recuperaNomeTitular() . PHP_EOL;
