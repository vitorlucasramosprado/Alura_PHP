<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];

//Faz um selecet e depois remove(dessa forma é melhor quando tem muitos dados)
// $aluno = $entityManager->find(Aluno::class, $id);

// if(is_null($aluno)) {
//     echo "Aluno inexistente \n";
//     exit;
// }

//Dessa forma a perfomance melhora, pois ele não precisa ir até o banco
$aluno = $entityManager->getReference(Aluno::class, $id);

$entityManager->remove($aluno);
$entityManager->flush();
