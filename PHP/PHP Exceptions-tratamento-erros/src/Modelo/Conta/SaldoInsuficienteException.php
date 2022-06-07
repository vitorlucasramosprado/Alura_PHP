<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
  public function __construct(float $valorSaque, float $saldoAtual)
  {
      $message = "Você tentou sacar $valorSaque, mas  tem apenas $saldoAtual";
      parent::__construct($message);
  }
}