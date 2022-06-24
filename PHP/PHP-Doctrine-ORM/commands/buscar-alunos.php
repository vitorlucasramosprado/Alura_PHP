<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$dql = "SELECT aluno FROM Alura\\Doctrine\\Entity\\Aluno aluno ";
$query = $entityManager->createQuery($dql);
$alunoList = $query->getResult();

foreach ($alunoList as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function(Telefone $telefone) {
            return $telefone->getNumero();
        })
        ->toArray();
    echo "\nID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n";
    echo "Telefones: " . implode(', ', $telefones) . PHP_EOL;
}



/* $flavio = $alunoRepository->find(4);
 echo $flavio->getNome() . "\n\n";*/


 //TRAZ EM ARRAY
/*$vitor = $alunoRepository->findBy([
     'nome' => 'Vitor Lucas'
 ]);

 var_dump($vitor);*/

//TRAZ UM OBJETO
/* $vitor = $alunoRepository->findOneBy([
     'nome' => 'Vitor Lucas'
 ]);

 var_dump($vitor);*/
