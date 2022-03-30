<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $senha;
    private $tratamento;


    public function __construct(string $nome, string $senha, string $genero)
    {
         
        $this->setNomeSobrenome($nome); 
        $this->validaSenha($senha);

    }

    private function adicionaTratamentoAoSobrenome(string $nome, string $genero)
    {
        if ($genero === 'M') {

        }

        if ($genero === 'F') {
             
        }
    }

    protected function setNomeSobrenome(string $nome)
    {
       
        $nomeSobrenome = explode(" ", $nome, 5);
       
        if ($nomeSobrenome[0] === "") {
            $this->nome = "Insira um nome válido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Insira um sobrenome válido";
        } else {    
            $this->sobrenome = $nomeSobrenome[1];
        } 
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getSenha(): string
    {
        return $this->senha;    
    }

    protected function validaSenha(string $senha)
    {
       $tamanhoSenha = strlen(trim($senha));

        if ($tamanhoSenha < 5) {
          $this->senha = "A senha precisa ter mais que 5 caractéres";
       }else{
           $this->senha = $senha;
       }
    }

}