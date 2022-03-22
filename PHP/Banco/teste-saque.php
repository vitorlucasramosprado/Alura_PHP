<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('109.876.543-21'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro teste', 'rua la', '37')
    )

);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();

