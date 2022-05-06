<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Funcionario, Diretor, Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
     new CPF('109.876.543-21'),
     1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patrícia',
     new CPF('698.549.548-10'),
     3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.951.234-98'),
     5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    1500,
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoesDe($umFuncionario);
$controlador->adicionaBonificacoesDe($umaFuncionaria);
$controlador->adicionaBonificacoesDe($umDiretor);
$controlador->adicionaBonificacoesDe($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;

